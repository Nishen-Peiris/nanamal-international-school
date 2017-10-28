
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
    $sql="DELETE FROM news WHERE id=$id";
    $result=mysqli_query($mysqlConnection,$sql);


    header("Location:view_news.php");


?>
