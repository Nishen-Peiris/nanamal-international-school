
<?php



$name = $_POST['name'];
$reg_num = $_POST['reg_num'];
$sinhala = $_POST['sinhala'];
$english = $_POST['english'];
$tamil = $_POST['tamil'];
$buddhism = $_POST['buddhism'];
$maths = $_POST['maths'];
$science = $_POST['science'];


include("config.php");


//    $id = mysqli_insert_id();
$sql = "INSERT INTO grade_six (id, reg_num, name, sinhala, english, maths, science, buddhism, tamil)
    VALUES('', '".$reg_num."', '".$name."','".$sinhala."','".$english."','".$maths."','".$science."','".$buddhism."','".$tamil."')";

// execute query
if ($name !='' && $reg_num !='' && $sinhala !='' && $english !='' && $tamil !='' && $buddhism !='' && $maths !='' && $science !='' && $db->query($sql) === TRUE) {

    $message = "You have added results successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'enter_grade6.php';</script>";

}
else {
    $message2 = "Please fill all the fields";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>window.location.href = 'enter_grade6.php';</script>";
}


$db->close();


?>