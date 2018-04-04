<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div>
    <!--Liste des jeux-->
    <div id="resp_1" class="row">
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/sport/110.jpg" alt="image du jeux Blood Bowl 3 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/99.jpg" alt="image du jeux Dirt 3 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/108.jpg" alt="image du jeux Dirt showdown sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/117.jpg" alt="image du jeux Fast and furious showdown sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/sport/94.jpg" alt="image du jeux Fifa 2018 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/114.jpg" alt="image du jeux Fifa 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/107.jpg" alt="image du jeux Football manager 2018 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/106.jpg" alt="image du jeux Football manager 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/sport/96.jpg" alt="image du jeux Formule 1 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/97.jpg" alt="image du jeux Formaule 1 2014 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/116.jpg" alt="image du jeux Grid autosport sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/105.jpg" alt="image du jeux Grid 2 limited edition sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/sport/100.jpg" alt="image du jeux Moto GP 17 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/101.jpg" alt="image du jeux Moto GP 13 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/102.jpg" alt="image du jeux Nascar 14 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/103.jpg" alt="image du jeux Nba 2018 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/sport/113.jpg" alt="image du jeux Nba 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/109.jpg" alt="image du jeux PES 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/98.jpg" alt="image du jeux PES 2015 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/111.jpg" alt="image du jeux Pro Cycling Manager 2017 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/sport/112.jpg" alt="image du jeux Pro Cycling Manager 2014 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/sport/104.jpg" alt="image du jeux Rugby 2018 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/sport/95.jpg" alt="image du jeux Rugby 2015 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/sport/115.jpg" alt="image du jeux Steep sur PC"/>
        </div>
    </div>


    <?php include('footer.php'); ?>


</body>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
    /*début de la nav bar*/
    $(function() {
        // Affichage du sous menu en douceur
        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
        });

    });
    /*fin de la nav bar*/
    /*début slider*/
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });


</script>

</html>

