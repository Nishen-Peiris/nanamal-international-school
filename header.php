<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nenamal International School</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
<!--    <link href="css/font-awesome.css" rel="stylesheet">-->

    <script  type="text/javascript"  src="assets/js/jquery.min.js"></script>
    <link    href="assets/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
   
    <!-- superslides css -->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- website theme color file -->
    <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">

    <link href="src/images-grid.css" rel="stylesheet">
    <!-- main site css file -->
    <link href="style.css" rel="stylesheet">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  

    <script src="js/jssor.slider-22.0.15.min.js" type="text/javascript" data-library="jssor.slider" data-version="22.0.15"></script>
    <script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>


<!--    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">-->
    <!--[if lt IE 9]>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script>
        function submitEmail() {

            var email = $('#emailText').val();

            jQuery.post('/submission.php', {
                email: email
            },function(data){
                $('#submissionResponse').html(data);
            },html);

        }
    </script>

    <![endif]-->
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!-- End Preloader -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<section>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--            <a class="navbar-brand" href="index.html">WpF <span>BGness</span></a>-->
                <a class="#" href="index.php"><img src="img/logo.png" class="img-responsive" alt="logo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar_area">
                <?php $active="index"; ?>
                <ul class="nav navbar-nav navbar-right custom_nav">
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="index.php">Home</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>><a href="about.php">About Us</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'class="active"' ?>><a href="gallery.php">Gallery</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'downloads.php') echo 'class="active"' ?>><a href="downloads.php">Downloads</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>><a href="contact.php">Contact Us</a></li>
                    <li <?php if (basename($_SERVER['PHP_SELF']) == 'login/login.php') echo 'class="active"' ?>><a href="login/login.php">Login</a></li>
                    <!--                    <li class="active"><a href="index.php">Home</a></li>-->

<!--                    <li class=><a href="about.php">About Us</a></li>-->
<!--                    <li class=><a href="http://drivegal.com/hrm-nenamal/album/">Gallery</a></li>-->
<!--                    <li class=><a href="gallery.php">Gallery</a></li>-->
<!--                    <li class=><a href="downloads.php">Downloads</a></li>-->

<!--                    <li class="dropdown">-->
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Acedamic <span class="caret"></span></a>-->
<!--                        <ul class="dropdown-menu" role="menu">-->
<!--                            <li><a href="downloads.php">Downloads</a></li>-->
<!--                            <li><a href="results.php">Results</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="contact.php">Contact Us</a></li>-->
<!--                    <li><a href="login/login.php"">Login</a></li>-->
                </ul>
            </div><!--/.nav-collapse -->

        </div>
    </nav>
</section>


<!-- End navbar -->
