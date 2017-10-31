<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/30/17
 * Time: 15:31
 */
include('../login/session.php');
require_once('ad_heading.php');

if (!$db) {
    echo "Please try later.";
    exit();
}

$query = "SELECT * FROM grades ";
$grades = mysqli_query($db, $query);
?>

<div class="container news_table_content">
    <h2>Search for results</h2>
    <div class="form-group">
        <label for="grade">Grade</label>
    </div>
    <div class="form-group">
        <select class="dropdown_fixed" name="grade_list" id="grade_list" style="height: 34px; color: black">
            <?php
            echo "<option value=\"-1\">Please select a grade</option>"; // add the empty option at the begining of the grades list
            while ($row = mysqli_fetch_array($grades)):;
                echo "<option value=\"$row[1]\">$row[1]</option>";
            endwhile
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="registration_number">Academic year</label>
    </div>
    <div class="form-group">
        <select class="dropdown_fixed" name="year_list" id="year_list" style="height: 34px; color: black;">
            <?php
            $year = date("Y");
            for ($i = 0; $i < 5; $i++, $year--) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>
    </div>
    <button class="btn btn-success" id="show_results" onclick="fetchResults()">Show</button>
    <div class="result_row">
        <div class="form-group results_list" id="results_list">
            <!-- results list is loaded here -->
        </div>
    </div>
</div>

<?php require_once('ad_footer.php'); ?>

<script>
    // fetch results of the student for the given grade
    function fetchResults() {
        var grade, year;
        var e = document.getElementById("year_list");
        year = e.options[e.selectedIndex].value;
        if (year = "") {
            alert('Select the year.');
        } else {
            var e = document.getElementById("grade_list");
            grade = e.options[e.selectedIndex].value;
            if (grade == -1) {
                alert('Please select a grade');
            } else {
                var e = document.getElementById("year_list");
                year = e.options[e.selectedIndex].value;
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
                xmlhttp.open("GET", "fetch_results.php?grade=" + grade + "&year=" + year, true);
                xmlhttp.send();
            }
        }
    }
</script>