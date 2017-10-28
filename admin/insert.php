
<?php

    $headline = $_POST['headline'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];
    $news_category = $_POST['news_category'];
    $date = $_POST['date'];
//    $category = $_POST['category'];
    $image_url  = $_FILES["fileField"]["name"];
    include("config.php");

    $sql = "INSERT INTO news (id, headline, tag, description, news_category, date)
    VALUES('', '".$headline."', '".$tag."','".$description."','".$news_category."','".$date."')";
//    $id = mysqli_insert_id();
    $newname = "$headline.jpg";
    move_uploaded_file( $_FILES['fileField']['tmp_name'], "../images/$newname");

// execute query
if ($headline !='' && $tag !='' && $description !='' && $date !='' && $db->query($sql) === TRUE) {
    $message = "You have added news details successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href = 'news.php';</script>";

} else {
    $message2 = "Please fill all the fields";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>window.location.href = 'news.php';</script>";
    echo "Error: " . $sql . "<br>" . $db->error;

}

$db->close();


?>