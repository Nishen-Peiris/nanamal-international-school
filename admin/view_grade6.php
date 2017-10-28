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



$query = "SELECT * FROM grade_six";
$results = mysqli_query($mysqlConnection, $query);

//if(!$results) die("Database Error...: " . mysqli_error());

$row_count=mysqli_num_rows($results);


?>


<div class="container news_table_content">
    <h2>Grade Six Results</h2>

    <table class="table table-sm">
        <thead>
        <tr>

            <th>Student Name</th>
            <th>Registration Num.</th>
            <th>Sinhala</th>
            <th>Science</th>
            <th>Maths</th>
            <th>Buddhism</th>
            <th>English</th>
            <th>Tamil</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row_users = mysqli_fetch_array($results)){
            ?>
            <tr>


                <td><?php echo $row_users['name']; ?></td>
                <td><?php echo $row_users['reg_num']; ?></td>
                <td><?php echo $row_users['sinhala']; ?></td>
                <td><?php echo $row_users['science']; ?></td>
                <td><?php echo $row_users['maths']; ?></td>
                <td><?php echo $row_users['buddhism']; ?></td>
                <td><?php echo $row_users['english']; ?></td>
                <td><?php echo $row_users['tamil']; ?></td>
                <td><a class="btn btn-success" href="update_grade6.php?id=<?php echo $row_users['id']; ?>">Update</a> <a class="btn btn-danger" href="delete_grade6.php?id=<?php echo $row_users['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>

            <?php
        }
        ?>

        </tbody>
    </table>
</div>


<?php require_once('ad_footer.php'); ?>
