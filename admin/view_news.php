<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>
<?php
//include "config.php";

$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection)
{
    echo "Please try later.";
}



$query = "SELECT * FROM news";
$results = mysqli_query($mysqlConnection, $query);

//if(!$results) die("Database Error...: " . mysqli_error());

$row_count=mysqli_num_rows($results);


?>


<div class="container news_table_content">
    <h2>List of News</h2>

    <table class="table table-sm">
        <thead>
        <tr>

            <th>Image</th>
            <th>Headline</th>
            <th>Tag</th>
            <th>Description</th>
            <th>News Category</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row_users = mysqli_fetch_array($results)){
        ?>
        <tr>

            <td> <img src="../images/<?php echo $row_users['headline']; ?>.jpg"  class="img-responsive" height="100px" width="100px" /></td>
            <td><?php echo $row_users['headline']; ?></td>
            <td><?php echo $row_users['tag']; ?></td>
            <td><?php echo $row_users['description']; ?></td>
            <td><?php echo $row_users['news_category']; ?></td>
            <td><?php echo $row_users['date']; ?></td>
            <td><a class="btn btn-success" href="update_news.php?id=<?php echo $row_users['id']; ?>">Update</a><a class="btn btn-danger" href="delete_news.php?id=<?php echo $row_users['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
        </tr>

            <?php
        }
        ?>

        </tbody>
    </table>
</div>


<?php require_once('ad_footer.php'); ?>
