
<?php require_once('header.php'); ?>

<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 1500,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 3000);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<style>
    /* jssor slider loading skin double-tail-spin css */

    .jssorl-004-double-tail-spin img {
        animation-name: jssorl-004-double-tail-spin;
        animation-duration: 1.2s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-004-double-tail-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    .jssorb051 .i {position:absolute;cursor:pointer;}
    .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
    .jssorb051 .i:hover .b {fill-opacity:.7;}
    .jssorb051 .iav .b {fill-opacity: 1;}
    .jssorb051 .i.idn {opacity:.3;}

    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>


<!-- start slider section -->
<section id="sliderSection">

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:420px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/01.JPG" class="img-responsive" />
            </div>
            <div>
                <img data-u="image" src="img/02.JPG" class="img-responsive" />
            </div>
            <div>
                <img data-u="image" src="img/03.JPG" class="img-responsive" />
            </div>
            <div>
                <img data-u="image" src="img/04.JPG" class="img-responsive" />
            </div>
            <div>
                <img data-u="image" src="img/05.jpg" class="img-responsive" />
            </div>


        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:14px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:18px;height:18px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>

</section>
<!-- End slider section -->


<!-- Start Service area -->
<section id="service">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="service_area">
                <div class="service_title">
                    <hr>
                    <h2>Nenamal International School </h2>
                    <p>The best School what you are searching in both English & Sinhala medium</p>
                </div>
                <ul class="service_nav wow flipInX">
                    <li>
                        <a class="service_icon" href="#"><i class="fa fa-users"></i></a>
                        <h2>Expert Staff</h2>
                        <p> has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    </li>
                    <li>
                        <a class="service_icon" href="#"><i class="fa fa-book"></i></a>
                        <h2>Best Learning Methods</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    </li>
                    <li>
                        <a class="service_icon" href="#"><i class="fa fa-support"></i></a>
                        <h2>Best Learning Environment</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Service area -->

<!-- start How it works area -->
<section id="ourMission">
    <div class="container">
        <div class="row">

                <div class="col-sm-3 circle1">
                    <h2>Vision</h2>
                    <p> Caring for children’s education and serving the mankind as a Nation Builder and create true
                        Sri Lankan leaders with a global outlook. </p>

                </div>
                <div class="col-sm-3 circle2">
                    <h2>Mision</h2>
                    <p> By the year 2022 our institute aims to provide an island wide service by making intelligent, active and helpful children
                    for the society through good values</p>

                </div>
                <div class="col-sm-3 circle1">
                    <h2>Principle's Message</h2>
                    <p class="sinhala"> බෞද්ධ වත් පිලිවෙත් හා ආචාර ධර්ම වලට මුල් තැන දෙමින් ඔබේ දරුවා මෙම විදයාලය මගින් හැඩ ගස්වන්නේ විශය දැනුමින් පමනක් නොව අපේ සිරිත් විරිත් හා ගුණධර්ම වලින් පොෂනය කරමිනි.මෙය අද දෙමාපියන්ගේ සිත් වලට බරපතල ලෙස පීඩා දෙන ප්‍රශ්නයට පිලිතුරක් වනු නොඅනුමානය.</p>

                </div>
                <div class="col-sm-3 circle2">
                    <h2>Counsellor's Message</h2>
                    <p class="sinhala"> දැනටමත් විදුහලේ විශාල දරුවන් ප්‍රමානයක් අධයාපනය හදාරනවා.දරුවන්ගේ අධයාපන හැකියාවන් මෙන්ම විනය ගරුක බව මූලික පරමාර්ථය කර ගනිමින් ඉදිරියට විදුහල කරගෙන යාමට මා කටයුතු කරන්ව. මේක පෞද්ගලික පාසලක් දේශිය විශය නිර්දේශය සිංහල හා ඉංග්‍රීසි යන මාධය දෙකෙන්ම ඉගෙන්වීම් කරනවා. </p>

                </div>

            </div>


    </div>
</section>
<!-- End How it works area -->

    <section id="mu-abtus-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-abtus-counter-area">
                        <div class="row">
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-book"></span>
                                    <h4 class="counter">14</h4>
                                    <p>Subjects</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-users"></span>
                                    <h4 class="counter">75</h4>
                                    <p>Students</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single">
                                    <span class="fa fa-flask"></span>
                                    <h4 class="counter">3</h4>
                                    <p>Modern Labs</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                            <!-- Start counter item -->
                            <div class="col-lg-3 col-md-3 col-sm-3">
                                <div class="mu-abtus-counter-single no-border">
                                    <span class="fa fa-user"></span>
                                    <h4 class="counter">15</h4>
                                    <p>Teachers</p>
                                </div>
                            </div>
                            <!-- End counter item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- start Our Team area -->
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



$query = "SELECT * FROM staff";
$results = mysqli_query($mysqlConnection, $query);

//if(!$results) die("Database Error...: " . mysqli_error());

$row_count=mysqli_num_rows($results);


?>



<section id="ourTeam" class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="span12">
                    <div class="team_area wow fadeInLeftBig">
                        <div class="team_title">
                            <hr>
                            <h2>Meet <span>Our Staff</span></h2>
                            <p>Teachers who love teaching teach children to love learning</p>
                        </div>
                        <div class="">
                            <div id="myCarousel" class="carousel fdi-Carousel slide">
                                <!-- Carousel items -->
                                <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                                    <div class="carousel-inner onebyone-carosel">
                                        <?php
                                        $counter = 1;
                                        while ($row_users = mysqli_fetch_array($results)){
                                        ?>
                                            <div class="item <?php if($counter <= 1){echo " active"; } ?>">
                                                <div class="col-sm-3 ">
                                                    <div class="member_wrp">
                                                        <img src="images/staff/<?php echo $row_users['name']; ?>.jpg" class="img-responsive img-circle">

                                                        <span class="name"><?php echo $row_users['name']; ?></span>
                                                    </div>

                                                </div>
                                            </div>

<!--                                        <div class="item --><?php //if($counter <= 1){echo " active"; } ?><!--">-->
<!--                                            <div class="col-sm-3">-->
<!--                                                <div class="card">-->
<!--                                                    <canvas class="header-bg"  height="70" id="header-blur"></canvas>-->
<!--                                                    <div class="avatar">-->
<!--                                                        <img src="images/staff/--><?php //echo $row_users['name']; ?><!--.jpg" alt="" >-->
<!---->
<!--                                                    </div>-->
<!--                                                    <div class="content">-->
<!--                                                        <p>--><?php //echo $row_users['name']; ?><!--<br>-->
<!--                                                            --><?php //echo $row_users['details']; ?><!--</p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!---->
<!--                                        </div>-->
                                            <?php
                                            $counter++;
                                        }
                                        mysqli_close($mysqlConnection);
                                        ?>


                                    </div>
                                   <a class="left carousel-control" href="#eventCarousel" data-slide="prev"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                   <a class="right carousel-control" href="#eventCarousel" data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>





        </div>
    </div>
</section>
<!-- End Our Team area -->




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



$query = "SELECT * FROM news WHERE news_category='upcoming' ORDER BY date  desc LIMIT 4";
$results = mysqli_query($mysqlConnection, $query);

//if(!$results) die("Database Error...: " . mysqli_error());

$row_count=mysqli_num_rows($results);


?>

<!-- start upcoming news  section -->
    <section id="events">
        <div class="container">

            <div class="row">
                <div class="col-sm-6 news_container" >
                    <h2 class="news_header">Upcoming Events</h2>

                    <?php


                    while ($row_users = mysqli_fetch_array($results)){
                        $time = strtotime($row_users['date']);

                    ?>

                <article>
                    <div class="current-date">
                        <p><?php echo date("F", $time); ?></p>
                        <p class="date"><?php echo date('d', $time); ?></p>
                    </div>
                    <div>

                    </div>
                    <div>
<!--                        <a class="more" href="#">Read more</a>-->
                        <p class="headline"><?php echo $row_users['headline']; ?></p>
                        <p class="more_details2"><?php echo $row_users['description']; ?></p>
                    </div>
                </article>

                        <?php
                    }
                    ?>

                    <br>
                   
                </div>
                <div class="col-sm-3">
                    <a class="twitter-timeline" href="https://twitter.com/nenamalschool">Tweets by nenamalschool</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="col-sm-3">
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fnenamalschool/&width=600&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" frameborder="0" style="border:none;  width:100%; height:430px; background: white; float:left; " allowtransparency="true"></iframe>
                </div>
            </div>


        </div>

    </section>



<!-- start special quote -->
<section id="specialQuote">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 wow bounceInLeft">
                <p> Education is the most powerful weapon which you can use to change the world.</p> <br> <p>- Nelson Mandela</p>
            </div>
        </div>
    </div>
</section>
<!-- End special quote -->

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



$query = "SELECT * FROM news WHERE news_category='latest' ORDER BY  date desc LIMIT 4";
$results = mysqli_query($mysqlConnection, $query);

//if(!$results) die("Database Error...: " . mysqli_error());

$row_count=mysqli_num_rows($results);


?>



<section id="ourTeam2">
    <div class="container">
        <div class="row">
            <div class="team_title">
                <hr>
                <h2>Latest <span>News</span></h2>
            </div>

            <?php


            while ($row_users = mysqli_fetch_array($results)){


                ?>
                <div class="col-sm-3">
                    <div class="news">
                        <div class="img-figure">
                            <div class="cat"><?php echo $row_users['date']; ?></div>
                            <img src="images/<?php echo $row_users['headline']; ?>.jpg"  class="img-responsive" />
                        </div>

                        <div class="title">
                            <h1><?php echo substr($row_users['headline'],0,50); ?>...</h1>
                        </div>
                        <p class="description">
                            <?php echo substr($row_users['description'],0,60); ?>....
                        </p>

                        <p class="more">
                            <a href="news_more.php?id=<?php echo $row_users['id']; ?>">read more</a><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </p>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>
    </div>

   
</section>

<!-- End latest news area -->

<!-- start clients brand area -->

<!-- End clients brand area -->
<script>
var mul_table = [
    512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,
    454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,
    482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,
    437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,
    497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,
    320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,
    446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,
    329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,
    505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,
    399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,
    324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,
    268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,
    451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,
    385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,
    332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,
    289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];


var shg_table = [
    9, 11, 12, 13, 13, 14, 14, 15, 15, 15, 15, 16, 16, 16, 16, 17,
    17, 17, 17, 17, 17, 17, 18, 18, 18, 18, 18, 18, 18, 18, 18, 19,
    19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 19, 20, 20, 20,
    20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 21,
    21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 21,
    21, 21, 21, 21, 21, 21, 21, 21, 21, 21, 22, 22, 22, 22, 22, 22,
    22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22,
    22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 23,
    23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23,
    23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23,
    23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23, 23,
    23, 23, 23, 23, 23, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24,
    24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24,
    24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24,
    24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24,
    24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24 ];


function stackBlurCanvasRGBA( canvas, top_x, top_y, width, height, radius )
{
    if ( isNaN(radius) || radius < 1 ) return;
    radius |= 0;

    var context = canvas.getContext("2d");
    var imageData;

    try {
        try {
            imageData = context.getImageData( top_x, top_y, width, height );
        } catch(e) {

            // NOTE: this part is supposedly only needed if you want to work with local files
            // so it might be okay to remove the whole try/catch block and just use
            // imageData = context.getImageData( top_x, top_y, width, height );
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
                imageData = context.getImageData( top_x, top_y, width, height );
            } catch(e) {
                alert("Cannot access local image");
                throw new Error("unable to access local image data: " + e);
                return;
            }
        }
    } catch(e) {
        alert("Cannot access image");
        throw new Error("unable to access image data: " + e);
    }

    var pixels = imageData.data;

    var x, y, i, p, yp, yi, yw, r_sum, g_sum, b_sum, a_sum,
        r_out_sum, g_out_sum, b_out_sum, a_out_sum,
        r_in_sum, g_in_sum, b_in_sum, a_in_sum,
        pr, pg, pb, pa, rbs;

    var div = radius + radius + 1;
    var w4 = width << 2;
    var widthMinus1  = width - 1;
    var heightMinus1 = height - 1;
    var radiusPlus1  = radius + 1;
    var sumFactor = radiusPlus1 * ( radiusPlus1 + 1 ) / 2;

    var stackStart = new BlurStack();
    var stack = stackStart;
    for ( i = 1; i < div; i++ )
    {
        stack = stack.next = new BlurStack();
        if ( i == radiusPlus1 ) var stackEnd = stack;
    }
    stack.next = stackStart;
    var stackIn = null;
    var stackOut = null;

    yw = yi = 0;

    var mul_sum = mul_table[radius];
    var shg_sum = shg_table[radius];

    for ( y = 0; y < height; y++ )
    {
        r_in_sum = g_in_sum = b_in_sum = a_in_sum = r_sum = g_sum = b_sum = a_sum = 0;

        r_out_sum = radiusPlus1 * ( pr = pixels[yi] );
        g_out_sum = radiusPlus1 * ( pg = pixels[yi+1] );
        b_out_sum = radiusPlus1 * ( pb = pixels[yi+2] );
        a_out_sum = radiusPlus1 * ( pa = pixels[yi+3] );

        r_sum += sumFactor * pr;
        g_sum += sumFactor * pg;
        b_sum += sumFactor * pb;
        a_sum += sumFactor * pa;

        stack = stackStart;

        for( i = 0; i < radiusPlus1; i++ )
        {
            stack.r = pr;
            stack.g = pg;
            stack.b = pb;
            stack.a = pa;
            stack = stack.next;
        }

        for( i = 1; i < radiusPlus1; i++ )
        {
            p = yi + (( widthMinus1 < i ? widthMinus1 : i ) << 2 );
            r_sum += ( stack.r = ( pr = pixels[p])) * ( rbs = radiusPlus1 - i );
            g_sum += ( stack.g = ( pg = pixels[p+1])) * rbs;
            b_sum += ( stack.b = ( pb = pixels[p+2])) * rbs;
            a_sum += ( stack.a = ( pa = pixels[p+3])) * rbs;

            r_in_sum += pr;
            g_in_sum += pg;
            b_in_sum += pb;
            a_in_sum += pa;

            stack = stack.next;
        }


        stackIn = stackStart;
        stackOut = stackEnd;
        for ( x = 0; x < width; x++ )
        {
            pixels[yi+3] = pa = (a_sum * mul_sum) >> shg_sum;
            if ( pa != 0 )
            {
                pa = 255 / pa;
                pixels[yi]   = ((r_sum * mul_sum) >> shg_sum) * pa;
                pixels[yi+1] = ((g_sum * mul_sum) >> shg_sum) * pa;
                pixels[yi+2] = ((b_sum * mul_sum) >> shg_sum) * pa;
            } else {
                pixels[yi] = pixels[yi+1] = pixels[yi+2] = 0;
            }

            r_sum -= r_out_sum;
            g_sum -= g_out_sum;
            b_sum -= b_out_sum;
            a_sum -= a_out_sum;

            r_out_sum -= stackIn.r;
            g_out_sum -= stackIn.g;
            b_out_sum -= stackIn.b;
            a_out_sum -= stackIn.a;

            p =  ( yw + ( ( p = x + radius + 1 ) < widthMinus1 ? p : widthMinus1 ) ) << 2;

            r_in_sum += ( stackIn.r = pixels[p]);
            g_in_sum += ( stackIn.g = pixels[p+1]);
            b_in_sum += ( stackIn.b = pixels[p+2]);
            a_in_sum += ( stackIn.a = pixels[p+3]);

            r_sum += r_in_sum;
            g_sum += g_in_sum;
            b_sum += b_in_sum;
            a_sum += a_in_sum;

            stackIn = stackIn.next;

            r_out_sum += ( pr = stackOut.r );
            g_out_sum += ( pg = stackOut.g );
            b_out_sum += ( pb = stackOut.b );
            a_out_sum += ( pa = stackOut.a );

            r_in_sum -= pr;
            g_in_sum -= pg;
            b_in_sum -= pb;
            a_in_sum -= pa;

            stackOut = stackOut.next;

            yi += 4;
        }
        yw += width;
    }


    for ( x = 0; x < width; x++ )
    {
        g_in_sum = b_in_sum = a_in_sum = r_in_sum = g_sum = b_sum = a_sum = r_sum = 0;

        yi = x << 2;
        r_out_sum = radiusPlus1 * ( pr = pixels[yi]);
        g_out_sum = radiusPlus1 * ( pg = pixels[yi+1]);
        b_out_sum = radiusPlus1 * ( pb = pixels[yi+2]);
        a_out_sum = radiusPlus1 * ( pa = pixels[yi+3]);

        r_sum += sumFactor * pr;
        g_sum += sumFactor * pg;
        b_sum += sumFactor * pb;
        a_sum += sumFactor * pa;

        stack = stackStart;

        for( i = 0; i < radiusPlus1; i++ )
        {
            stack.r = pr;
            stack.g = pg;
            stack.b = pb;
            stack.a = pa;
            stack = stack.next;
        }

        yp = width;

        for( i = 1; i <= radius; i++ )
        {
            yi = ( yp + x ) << 2;

            r_sum += ( stack.r = ( pr = pixels[yi])) * ( rbs = radiusPlus1 - i );
            g_sum += ( stack.g = ( pg = pixels[yi+1])) * rbs;
            b_sum += ( stack.b = ( pb = pixels[yi+2])) * rbs;
            a_sum += ( stack.a = ( pa = pixels[yi+3])) * rbs;

            r_in_sum += pr;
            g_in_sum += pg;
            b_in_sum += pb;
            a_in_sum += pa;

            stack = stack.next;

            if( i < heightMinus1 )
            {
                yp += width;
            }
        }

        yi = x;
        stackIn = stackStart;
        stackOut = stackEnd;
        for ( y = 0; y < height; y++ )
        {
            p = yi << 2;
            pixels[p+3] = pa = (a_sum * mul_sum) >> shg_sum;
            if ( pa > 0 )
            {
                pa = 255 / pa;
                pixels[p]   = ((r_sum * mul_sum) >> shg_sum ) * pa;
                pixels[p+1] = ((g_sum * mul_sum) >> shg_sum ) * pa;
                pixels[p+2] = ((b_sum * mul_sum) >> shg_sum ) * pa;
            } else {
                pixels[p] = pixels[p+1] = pixels[p+2] = 0;
            }

            r_sum -= r_out_sum;
            g_sum -= g_out_sum;
            b_sum -= b_out_sum;
            a_sum -= a_out_sum;

            r_out_sum -= stackIn.r;
            g_out_sum -= stackIn.g;
            b_out_sum -= stackIn.b;
            a_out_sum -= stackIn.a;

            p = ( x + (( ( p = y + radiusPlus1) < heightMinus1 ? p : heightMinus1 ) * width )) << 2;

            r_sum += ( r_in_sum += ( stackIn.r = pixels[p]));
            g_sum += ( g_in_sum += ( stackIn.g = pixels[p+1]));
            b_sum += ( b_in_sum += ( stackIn.b = pixels[p+2]));
            a_sum += ( a_in_sum += ( stackIn.a = pixels[p+3]));

            stackIn = stackIn.next;

            r_out_sum += ( pr = stackOut.r );
            g_out_sum += ( pg = stackOut.g );
            b_out_sum += ( pb = stackOut.b );
            a_out_sum += ( pa = stackOut.a );

            r_in_sum -= pr;
            g_in_sum -= pg;
            b_in_sum -= pb;
            a_in_sum -= pa;

            stackOut = stackOut.next;

            yi += width;
        }
    }

    context.putImageData( imageData, top_x, top_y );

}

function BlurStack()
{
    this.r = 0;
    this.g = 0;
    this.b = 0;
    this.a = 0;
    this.next = null;
}






</script>


<!-- start footer -->
<?php require_once('footer.php')?>