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
$sql="SELECT * FROM staff WHERE id=$id";
$result=mysqli_query($mysqlConnection,$sql);
$row= mysqli_fetch_array($result);
//header("Location:view_news.php");


?>
<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Update Staff Member</div>
            <div class="panel-body">
                <blockquote>
                    <form  action="edit_member.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label">Avatar</label><br>
                            <img  alt="choose image" height="200" width="200"><br>
                            <input type="file"  name="fileField" id="fileField" value="Add Image"><br>

                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" value="<?php echo $row['id']; ?>" name="id">
                        </div>

                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" name="name">
                        </div>



                        <div class="form-group">
                            <label for="email">Details</label>
                        <textarea class="form-control" id="details"  name="details"><?php echo $row['details']; ?>
                        </textarea>
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
