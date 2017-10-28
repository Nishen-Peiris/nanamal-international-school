<?php //include('../login/session.php'); ?>
<?php

$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection) {
    echo "Please try later.";
}

$id = $_POST['id'];
$name = $_POST['name'];
$reg_num = $_POST['reg_num'];
$sinhala = $_POST['sinhala'];
$english = $_POST['english'];
$tamil = $_POST['tamil'];
$buddhism = $_POST['buddhism'];
$maths = $_POST['maths'];
$science = $_POST['science'];




$sql = "UPDATE grade_six SET  name='$name', reg_num='$reg_num', sinhala='$sinhala', english='$english', maths='$maths',  science='$science', buddhism ='$buddhism', tamil='$tamil' WHERE id='$id'";


// execute query
if ($mysqlConnection->query($sql) === TRUE) {
    $message = "You have updated results successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'view_grade6.php';</script>";

} else {
    echo "Error: " . $sql . "<br>" . $mysqlConnection->error;
}

$mysqlConnection->close();


?>

