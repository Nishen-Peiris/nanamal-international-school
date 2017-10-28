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
    $sql="SELECT * FROM news WHERE id=$id";
    $result=mysqli_query($mysqlConnection,$sql);
    $row= mysqli_fetch_array($result);
//header("Location:view_news.php");


?>
<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Update News</div>
            <div class="panel-body">
                <blockquote>
                <form  action="edit_news.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label">Avatar</label><br>
                        <img  alt="choose image" height="200" width="200"><br>
                        <input type="file"  name="fileField" id="fileField" value="Add Image"><br>

                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="id" value="<?php echo $row['id']; ?>" name="id">
                    </div>

                    <div class="form-group">
                        <label for="email">Headline</label>
                        <input type="text" class="form-control" id="headline" value="<?php echo $row['headline']; ?>" name="headline">
                    </div>

                    <div class="form-group">
                        <label for="email">Tag</label>
                        <input type="text" class="form-control" id="tag" value="<?php echo $row['tag']; ?>" name="tag">
                    </div>

                    <div class="form-group">
                        <label for="email">Date</label>
                        <input type="date" class="form-control" value="<?php echo $row['date']; ?>" id="date" name="date">
                    </div>

                    <div class="form-group">
                        <label for="email">Description</label>
                        <textarea class="form-control" id="description"  name="description"><?php echo $row['description']; ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Select News Category:</label>
                        <select id="category" name="news_category" value="<?php echo $row['news_category']; ?>">
                            <option value="upcoming">Upcoming</option>
                            <option value="latest">Latest</option>

                        </select>


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
