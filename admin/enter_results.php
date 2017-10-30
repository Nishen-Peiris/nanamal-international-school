<?php
include('../login/session.php');
require_once('ad_heading.php');

if (!$db) {
    echo "Please try later.";
    exit();
}

$query = "SELECT * FROM grades ";
$grades = mysqli_query($db, $query);
?>

<div class="container">
    <!---------------------- ---------------------- side navigation panel -------------------------------------------->
    <div class="col-sm-3">
        <div class="side_box">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">News</a>
                            <ul class="submenu">
                                <li><a href="news.php">Add News</a></li>
                                <li><a href="view_news.php">View News</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Staff Members</a>
                            <ul class="submenu">
                                <li><a href="staff.php">Add Members</a></li>
                                <li><a href="view_staff.php">View Members</a></li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Results</a>
                            <ul class="submenu">
                                <li><a href="enter_results.php">Add Results</a></li>
                                <li><a>View Results</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---------------------- ---------------------- insert results form -------------------------------------------->
    <div class="col-sm-9">
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Insert Results</div>
            <div class="panel-body">
                <form action="insert_results.php" method="post">
                    <div class="form-group">
                        <label for="email">Student name</label>
                        <textarea id="student_name" class="form-control" name="student_name"
                                  readonly="readonly" style="height: 34px; resize: none"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Registration Number</label>
                        <input type="text" class="form-control" id="registration_number" name="registration_number"
                               onkeyup="showStudentName(this.value)">
                    </div>
                    <div class="form-group">
                        <label for="email">Please Select the Grade </label>
                    </div>
                    <div class="form-group">
                        <label for="email">Grade</label>
                        <select class="dropdown_fixed" name="grade_list" id="grade_list">
                            <?php while ($row1 = mysqli_fetch_array($grades)):; ?>
                                <option value="<?php echo $row1[1] ?>"><?php echo $row1[1] ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <label for="email">Please fill the marks for each Subject </label>
                    <div class="result_row ">
                        <div class="form-group subject_list " id="subject_list">
                            <label for="email">Sinhala</label>
                            <input type="text" class="form-control" name="subject_mark[]">
                        </div>
                    </div>
                    <button class="btn btn-success" id="save_grade" name="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once('ad_footer.php'); ?>

<script>
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
        document.getElementById("student_name").innerText = "loading student name...";
        if (str != "") {
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
        }
    }
</script>