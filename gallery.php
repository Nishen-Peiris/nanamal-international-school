<?php require_once('header.php'); ?>
<!--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">-->
<style>
    body { background-color:#fafafa;}
    p {
        text-align: center;
        font-weight: bold;
        font-family: sans-serif;
    }
    h3 { text-align:center; margin-top:50px; }
</style>




<section id="gallery_sec">
    <div class="gallery_header">
        <h1>Nenamal Gallery</h1>
        <hr>
    
    </div>
    <h3>Opening Ceramony</h3>
    <div id="gallery1"></div>
   

</section>
<script>


    var images2 = [
        'src/img/img01.jpg',
        'src/img/img02.jpg',
        'src/img/img03.jpg',
        'src/img/img04.jpg',
        'src/img/img06.jpg',
        'src/img/img07.jpg',
        'src/img/img08.jpg',

    ];


    $(function() {

        $('#gallery1').imagesGrid({
            images: images2
        });



    });

</script>



<?php require_once('footer.php')?>

