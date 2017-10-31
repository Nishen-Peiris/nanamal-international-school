<?php
include('../login/session.php');

$execute = true;

if (!$db) {
    echo "Please try later.";
    exit();
}

if (isset($_POST{'registration_number'})) {
    $registration_number = $_POST{'registration_number'};
    if ($_POST{'grade_list'} != -1) {
        $grade = $_POST{'grade_list'};
        if (isset($_POST['subject_results'])) {
            $subject_results = $_POST['subject_results'];
            $subject_IDs = $_POST['subject_IDs'];
            $no_of_subjects = sizeof($subject_results);
            if (isset($_POST{'year_list'})) {
                $academic_year = $_POST{'year_list'};
            } else {
                echo "<script>
        alert('Select the academic year.');
        window.location.href='enter_results.php';
        </script>";
                $execute = false;
            }
        } else {
            echo "<script>
        alert('Results of atleast one subject must be entered.');
        window.location.href='enter_results.php';
        </script>";
            $execute = false;
        }
    } else {
        echo "<script>
        alert('Select the grade.');
        window.location.href='enter_results.php';
        </script>";
        $execute = false;
    }
} else {
    echo "<script>
        alert('Enter the registration number.');
        window.location.href='enter_results.php';
        </script>";
    $execute = false;
}

if ($execute) {
    $count = 0;
    for ($i = 0; $i < $no_of_subjects; $i++) {
        if ($subject_results[$i] != "") {
            $query = "INSERT INTO results (reg_no, grade, subject_id, marks, academic_year)
        VALUES('$registration_number', '$grade', '$subject_IDs[$i]', '$subject_results[$i]', '$academic_year');";
            if (mysqli_query($db, $query)) {
                $count++;
            } else {
                echo mysqli_error($db);
            }
        }
    }
    echo "<script>
        alert('$count records saved.');
        window.location.href='enter_results.php';
        </script>";
}

$db->close();