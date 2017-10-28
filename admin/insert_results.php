
<?php

$server   = "localhost";
$database = "nenamal";
$username = "root";
$password = "";

$mysqlConnection = mysqli_connect($server, $username, $password, $database);
if (!$mysqlConnection)
{
    echo "Please try later.";
}

$name = $_POST['name'];
$reg_num = $_POST['reg_num'];
$grade_list= $_POST['grade_list'];
$subject_mark= $_POST['subject_mark'];
$subject_id= $_POST['subject_id'];
$length= count($_POST['subject_mark']);



for($i=0; $i< $length; $i++){
    $TestParameters=$_POST['subject_mark'][$i];
    $TestParameters2=$_POST['subject_id'][$i];


        $InsertQuery = "INSERT INTO results (reg_no, subject_id, marks) 
        VALUES('','".$reg_num."','$TestParameters2','$TestParameters')";

        $InsertQuery = "INSERT INTO student (reg_no, name, grade) 
        VALUES('".$reg_num."','".$name."','".$grade_list."')";

}

if ($reg_num !='' && $TestParameters2 !='' && $TestParameters !=''  && $mysqlConnection->query($InsertQuery) === TRUE) {

    $message = "You have added results successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'enter_results.php';</script>";

}
else {
    $message2 = "Please fill all the fields";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>window.location.href = 'enter_results.php';</script>";
}




$mysqlConnection->close();


//    $id = mysqli_insert_id();
//$sql = "INSERT INTO grade_six (id, reg_num, name, sinhala, english, maths, science, buddhism, tamil)
//    VALUES('', '".$reg_num."', '".$name."','".$sinhala."','".$english."','".$maths."','".$science."','".$buddhism."','".$tamil."')";

// execute query


?>