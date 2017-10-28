<?php require_once('header.php'); ?>
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



$id = $_GET['id'];
$sql="SELECT * FROM news WHERE id=$id";
$result=mysqli_query($mysqlConnection,$sql);
$row= mysqli_fetch_array($result);


?>
<section class="news_banner">
<!--    <h1>Nenamal News</h1>-->
</section>
    <section id="news_sec">

        <div class="row">
                <div class="col-sm-8 more_details">
                    <h3 class="news_topic"><?php echo $row['headline']; ?></h3>
                    <span class="news_topic">Posted on <?php echo $row['date']; ?></span><br>
                    <hr>

                    <p class="news_details">
                        <?php echo $row['description']; ?><br>
                    </p>



                    <img src="images/<?php echo $row['headline']; ?>.jpg"  class="img-responsive"   />

                </div>
            <?php
            //include "config.php";

            $server   = "localhost";
            $database = "nenamal";
            $username = "root";
            $password = "";

            $mysqlConnection = mysqli_connect($server, $username, $password, $database);
            if (!$mysqlConnection)
            {
                echo "Please try later.";
            }



            $query = "SELECT * FROM news WHERE news_category='latest' ORDER BY  date desc ";
            $results = mysqli_query($mysqlConnection, $query);

            //if(!$results) die("Database Error...: " . mysqli_error());

            $row_count=mysqli_num_rows($results);


            ?>
                <div class="col-sm-4">
                    <div class="news_header">
                        <h3>More News</h3>
                    </div>
                    <div class="changing_news">
                        <ul>
                            <?php
                            while ($row_users = mysqli_fetch_array($results)){
                                ?>
                                <div class="row news_snippet ">
                                    <div class="col-sm-4">
                                        <img src="images/<?php echo $row_users['headline']; ?>.jpg"  class="img-responsive" />
                                    </div>
                                    <div class="col-sm-8">
                                        <span>Posted on <?php echo $row_users['date']; ?></span><br>
                                        <h5><?php echo substr($row_users['headline'],0,100); ?>...</h5>
                                        <a href="news_more.php?id=<?php echo $row_users['id']; ?>">Read More >></a>
                                    </div>

                                </div>

                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="updown_icons">

                        <a href="#"><i class="fa fa-angle-down down" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-angle-up up" aria-hidden="true"></i></a>

                    </div>






                </div>
                </div>

    </section>

<?php require_once('footer.php')?>