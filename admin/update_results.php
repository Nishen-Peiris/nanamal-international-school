<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/30/17
 * Time: 15:31
 */
include('../login/session.php');
require_once('ad_heading.php');
$reg_no = $grade = $subject_id = $marks = $academic_year = $term = "";

if (!$db) {
    echo "Please try again later.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $reg_no = $_POST['registration_number'];
    $grade = $_POST['grade_list'];
    $academic_year = $_POST['year_list'];
    $marks = $_POST['marks'];
    $term = $_POST['term_list'];

    $sql = "UPDATE results set reg_no = '$reg_no', grade = '$grade', academic_year = '$academic_year', marks = '$marks', term = '$term' WHERE id = '$id'";
    if ($db->query($sql) == TRUE) {
        ?>
        <script type='text/javascript'>
            alert('Results updated.')
            window.location.href = 'view_results.php';
        </script>";
        <?php
    } else {
        ?>
        <script type='text/javascript'>
            alert('An error occurred while updating the results.')
            window.location.href = 'view_results.php';
        </script>";
        <?php
    }
    $conn->close();
} else {
    if (isset($_GET{'id'})) {
        $id = $_GET{'id'};
    } else {
        die();
    }

    $sql = "SELECT * FROM results WHERE id = '$id'";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $reg_no = $row["reg_no"];
        $grade = $row["grade"];
        $subject_id = $row["subject_id"];
        $marks = $row["marks"];
        $academic_year = $row["academic_year"];
        $term = $row['term'];

        // load the student name corresponding to the registration number
        $query = "SELECT * FROM student WHERE reg_no = '$reg_no'";
        $result = mysqli_query($db, $query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $student_name = $row["name"];
        }

        // load the grade list
        $query = "SELECT DISTINCT(grade) FROM grade_subject WHERE subject_id = '$subject_id'";
        $grades = mysqli_query($db, $query);

        // load the name of the subject
        $query = "SELECT * FROM subjects WHERE subject_id = '$subject_id'";
        $result = mysqli_query($db, $query);
        $row = $result->fetch_assoc();
        $subject = $row['subject'];
    } else {
        $db->close();
        die();
    }
    $db->close();
}
?>

<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Update results
            </div>
            <div class="panel-body">
                <blockquote>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"/>
                        <div class="form-group">
                            <label for="student_name">Student name</label>
                            <textarea id="student_name" class="form-control" name="student_name"
                                      readonly="readonly"
                                      style="height: 34px; resize: none"><?php echo $student_name; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="registration_number">Registration number</label>
                            <input type="text" class="form-control" id="registration_number" name="registration_number"
                                   required="required" value="<?php echo $reg_no; ?>"
                                   onkeyup="showStudentName(this.value)">
                        </div>
                        <div class="form-group">
                            <label>Select the grade</label>
                        </div>
                        <div class="form-group">
                            <select class="dropdown_fixed" name="grade_list" id="grade_list" style="height: 34px">
                                <?php
                                while ($row = mysqli_fetch_array($grades)):;
                                    ?>
                                    <option value="<?php echo $row[0]; ?>" <?php if ($grade == $row[0]) echo "selected"; ?>><?php echo $row[0]; ?></option>
                                    <?php
                                endwhile
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Academic year</label>
                        </div>
                        <div class="form-group">
                            <select class="dropdown_fixed" name="year_list" id="year_list" style="height: 34px">
                                <?php
                                $year = date("Y");
                                for ($i = 0; $i < 5; $i++, $year--) {
                                    ?>
                                    <option value="<?php echo $year; ?>" <?php if ($year == $academic_year) echo "selected"; ?>><?php echo $year; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Term</label>
                        </div>
                        <div class="form-group">
                            <select class="dropdown_fixed" name="term_list" id="term_list" style="height: 34px">
                                <option value="1" <?php if ($term == 1) echo "selected"; ?>>First</option>
                                <option value="2" <?php if ($term == 2) echo "selected"; ?>>Second</option>
                                <option value="3" <?php if ($term == 3) echo "selected"; ?>>Third</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="marks">Marks for <?php echo $subject; ?></label>
                            <input type="number" class="form-control" id="marks" name="marks"
                                   required="required" value="<?php echo $marks; ?>" min="0" max="100"
                                   style="width: 50%;">
                        </div>
                        <button class="btn btn-success" id="submit" name="submit">Update</button>
                    </form>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<?php require_once('ad_footer.php'); ?>

<script>
    // load the list of subjects for the selected grade
    $(document).ready(function () {
        $('#grade_list').change(function () {
            var grade_id = $(this).val();
            $.ajax({
                url: "fetch_inputs.php",
                method: "POST",
                data: {gradeId: grade_id},
                dataType: "text",
                success: function (data) {
                    $('#subject_list').html(data);
                }
            });
        });
    });

    // load student name from the database using the registration number
    function showStudentName(str) {
        if (str != "") {
            document.getElementById("student_name").innerText = "loading student name...";
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
            }
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("student_name").innerText = this.responseText;
                }
            };
            xmlhttp.open("GET", "find_student_name.php?registration_number=" + str, true);
            xmlhttp.send();
        } else {
            document.getElementById("student_name").innerText = "";
        }
    }
</script>