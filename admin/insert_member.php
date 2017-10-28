
<?php

$name = $_POST['name'];
$details = $_POST['details'];

//    $category = $_POST['category'];
$image_url  = $_FILES["fileField"]["name"];
include("config.php");

$sql = "INSERT INTO staff (id, name, details)
    VALUES('', '".$name."', '".$details."')";
//    $id = mysqli_insert_id();
$newname = "$name.jpg";
move_uploaded_file( $_FILES['fileField']['tmp_name'], "../images/staff/$newname");

// execute query
if ($name !='' &&  $db->query($sql) === TRUE) {
    $message = "You have added new member successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'staff.php';</script>";

} else {
    $message2 = "Please fill all the fields";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>window.location.href = 'staff.php';</script>";
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();




?>