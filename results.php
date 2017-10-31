<?php
require_once('header.php');
include 'config.php';

if (!$db) {
    echo "Please try again later.";
    exit();
}

$query = "SELECT * FROM grades ";
$grades = mysqli_query($db, $query);
?>

<section id="download">
    <div class="download_header">
        <h1>Results</h1>
        <hr>
    </div>
    <div class="download_content">
        <label for="email">Student name</label><br>
        <textarea id="student_name" name="student_name" readonly="readonly" style="resize: none"></textarea><br>
        <label for="registration_number">Registration number:</label><br>
        <input type="text" name="registration_number" id="registration_number"
               onkeyup="showStudentName(this.value)"><br>
        <label for="grade">Grade:</label><br>
        <select name="grade" id="grade">
            <?php
            while ($row = mysqli_fetch_array($grades)):;
                echo "<option value=\"$row[1]\">$row[1]</option>";
            endwhile
            ?>
        </select><br>
        <label for="term">Term</label><br>
        <select name="term" id="term">
            <option value="1">First</option>
            <option value="2">Second</option>
            <option value="3">Third</option>
        </select><br>
        <input type="submit" value="Show" onclick="fetchResults()">
    </div>
</section>

<div id="results_list">
    <!-- results list is loaded here -->
</div>

<?php require_once('footer.php') ?>

<script>
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
            xmlhttp.open("GET", "admin/find_student_name.php?registration_number=" + str, true);
            xmlhttp.send();
        } else {
            document.getElementById("student_name").innerText = "";
        }
    }

    // fetch results of the student for the given registration number and grade
    function fetchResults() {
        var registration_number, grade, term;
        registration_number = document.getElementById("registration_number").value;
        if (registration_number = "") {
            alert('Enter the registration number.');
        } else {
            var e = document.getElementById("grade");
            grade = e.options[e.selectedIndex].value;
            if (grade == "") {
                alert('Please select a grade');
            } else {
                var e = document.getElementById("term");
                term = e.options[e.selectedIndex].value;
                if (term = "") {
                    alert('Select the term.');
                } else {
                    registration_number = document.getElementById("registration_number").value;
                    var e = document.getElementById("term");
                    term = e.options[e.selectedIndex].value;
                    // all inputs are valid, therefore proceed
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
                    }
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("results_list").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "load_results_of_student.php?registration_number=" + registration_number + "&grade=" + grade + "&term=" + term, true);
                    xmlhttp.send();
                }
            }
        }
    }
</script>
