<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>
<?php
//including the database connection file
$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection)
{
    echo "Please try later.";
}
$id = $_GET['id'];
$sql="SELECT * FROM grade_six WHERE id=$id";
$result=mysqli_query($mysqlConnection,$sql);
$row= mysqli_fetch_array($result);
//header("Location:view_news.php");


?>
<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Update Grade Six Results</div>
            <div class="panel-body">
                <blockquote>
                    <form  action="edit_grade6.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" value="<?php echo $row['id']; ?>" name="id">
                        </div>

                        <div class="form-group">
                            <label for="email">Student name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Registration Number</label>
                            <input type="text" class="form-control" id="reg_num" value="<?php echo $row['reg_num']; ?>" name="reg_num">
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Sinhala</label>
                                    <input type="text" class="form-control" id="sinhala" value="<?php echo $row['sinhala']; ?>" name="sinhala">
                                </div>
                                <div class="form-group">
                                    <label for="email">English</label>
                                    <input type="text" class="form-control" id="english" value="<?php echo $row['english']; ?>" name="english">
                                </div>
                                <div class="form-group">
                                    <label for="email">Mathematics</label>
                                    <input type="text" class="form-control" id="maths" value="<?php echo $row['maths']; ?>" name="maths">
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Science</label>
                                    <input type="text" class="form-control" id="science" value="<?php echo $row['science']; ?>" name="science">
                                </div>
                                <div class="form-group">
                                    <label for="email">Buddhism</label>
                                    <input type="text" class="form-control" id="buddhism" value="<?php echo $row['buddhism']; ?>" name="buddhism">
                                </div>
                                <div class="form-group">
                                    <label for="email">Tamil</label>
                                    <input type="text" class="form-control" id="tamil" value="<?php echo $row['tamil']; ?>" name="tamil">
                                </div>
                            </div>
                        </div>




                        <button class="btn btn-success"id="submit" name="submit">Update</button>


                    </form>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<?php
mysqli_close($mysqlConnection);
?>

<?php require_once('ad_footer.php'); ?>
