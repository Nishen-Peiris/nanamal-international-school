<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>

<?php
$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection)
{
    echo "Please try later.";
}

$query="SELECT * FROM grades ";
$results = mysqli_query($mysqlConnection, $query);

$query2="SELECT * FROM subjects ";
$results2 = mysqli_query($mysqlConnection, $query2);
//if(!$results) die("Database Error...: " . mysqli_error());


?>


    <div class="container">
        <div class="col-sm-3">

            <div class="side_box">
                <div class="box sidemenu">
                    <div class="block" id="section-menu">
                        <ul class="section menu">
                            <li><a class="menuitem">News</a>
                                <ul class="submenu">
                                    <li><a href="news.php">Add News</a> </li>
                                    <li><a href="view_news.php">View News</a> </li>

                                </ul>
                            </li>
                            <li><a class="menuitem">Staff Members</a>
                                <ul class="submenu">
                                    <li><a href="staff.php">Add Members</a> </li>
                                    <li><a href="view_staff.php">View Members</a> </li>
                                </ul>
                            </li>
                            <li><a class="menuitem">Results</a>
                                <ul class="submenu">
                                    <li><a href="enter_results.php">Add Results</a> </li>
                                    <li><a>View Results</a> </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <div class="col-sm-9">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Insert Results</div>
                <div class="panel-body">
                    <form  action="insert_results.php" method="post" enctype="multipart/form-data">

                        <div class="form-group ">
                            <label for="email">Student name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Registration Number</label>
                            <input type="text" class="form-control" id="reg_num" name="reg_num">
                        </div>
                        <div class="form-group">
                            <label for="email">Please Select the Grade </label>
                        </div>


                        <div class="form-group">
                            <label for="email">Grade</label>
                            <select class="dropdown_fixed" name="grade_list" id="grade_list">
                                <?php while($row1= mysqli_fetch_array($results)):; ?>
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
    $(document).ready(function()
    {

        $('#grade_list').change(function () {

            var grade_id= $(this).val();
            $.ajax({
                url:"fetch_inputs.php",
                method: "POST",
                data:{gradeId: grade_id},
                dataType:"text",
                success:function(data) {
//                    console.log(data);
                    $('#subject_list').html(data);
//                    $('.subject_list').html(data);
                }
            });

        });
    });



    //        $('#grade_list').change(function () {
    //
    //            var grade_id= $(this).val();
    //            $.ajax({
    //                url:"fetch_inputs.php",
    //                method: "POST",
    //                data:{gradeId: grade_id},
    //                dataType:"text",
    //                success:function(data) {
    //                    $('.subject_list').html(data);
    //                }
    //        });
    //
    //        });




</script>
