<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['msg'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "nenamalschoolhrm@gmail.com";
//$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>