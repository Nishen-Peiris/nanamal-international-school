<?php include('../login/session.php'); ?>
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
    $headline = $_POST['headline'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];
    $news_category = $_POST['news_category'];
    $date = $_POST['date'];
    $image_url = $_FILES["fileField"]["name"];

    $sql = "UPDATE news SET  headline='$headline', tag='$tag', description='$description', news_category='$news_category', date='$date' WHERE id='$id'";

//    $id = mysqli_insert_id();
    $newname = "$headline.jpg";
    move_uploaded_file($_FILES['fileField']['tmp_name'], "../images/$newname");

// execute query
    if ($headline !='' && $tag !='' && $description !='' && $date !='' && $mysqlConnection->query($sql) === TRUE) {
        $message = "You have updated news details successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>window.location.href = 'view_news.php';</script>";

    } else {
        $message2 = "Please fill all the fields";
        echo "<script type='text/javascript'>alert('$message2');</script>";
        echo "<script type='text/javascript'>window.location.href = 'update_news.php?id=$id';</script>";

        echo "Error: " . $sql . "<br>" . $mysqlConnection->error;
    }

$mysqlConnection->close();


?>

