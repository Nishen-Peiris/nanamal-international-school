<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nishen Peiris
 * Date: 10/29/17
 * Time: 22:27
 */
include('../login/session.php');

if (!$db) {
    echo "Please try later later.";
    exit();
}

if (isset($_GET{'registration_number'})) {
    $registration_number = $_GET{'registration_number'};
} else {
    exit();
}

$query = "SELECT name FROM student WHERE reg_no = '$registration_number'";
$result = mysqli_query($db, $query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $student_name = $row["name"];
    echo $student_name;
}