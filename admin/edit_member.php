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
$details = $_POST['details'];

//    $category = $_POST['category'];
$image_url = $_FILES["fileField"]["name"];

$sql = "UPDATE staff SET  name='$name', details='$details' WHERE id='$id'";

//    $id = mysqli_insert_id();
$newname = "$name.jpg";
move_uploaded_file($_FILES['fileField']['tmp_name'], "../images/staff/$newname");

// execute query
if ($name !=''  && $details !='' && $mysqlConnection->query($sql) === TRUE) {
    $message = "You have updated staff member details successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'view_staff.php';</script>";

} else {
    $message2 = "Please fill all the fields";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>window.location.href = 'update_member.php?id=$id';</script>";

    echo "Error: " . $sql . "<br>" . $mysqlConnection->error;
}

$mysqlConnection->close();


?>

