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
    <!--Liste des jeux-->

    <div id="resp_1" class="row">
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/sport/198.jpg" alt="image du jeux Assetto Corsa sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/204.jpg" alt="image du jeux Blood Bowl II sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/207.jpg" alt="image du jeux Everybody's Golf sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/212.jpg" alt="image du jeux fifa 18 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/sport/199.jpg" alt="image du jeux fifa 17 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/200.jpg" alt="image du jeux Gran Turismo Sport sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/206.jpg" alt="image du jeux Madden 18 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/191.jpg" alt="image du jeux Madden 17 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/sport/205.jpg" alt="image du jeux nba 2018 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/202.jpg" alt="image du jeux nba 2017 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/193.jpg" alt="image du jeux nhl 15 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/190.jpg" alt="image du jeux nhl 16 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/sport/208.jpg" alt="image du jeux pes 2018 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/197.jpg" alt="image du jeux pes 2015 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/213.jpg" alt="image du jeux NBA Playground sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/211.jpg" alt="image du jeux rocket league sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/sport/195.jpg" alt="image du jeux rugby 15 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/210.jpg" alt="image du jeux Rugby Challenge 3 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/209.jpg" alt="image du jeux steep sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/192.jpg" alt="image du jeux Tony Hawk's Pro Skater 5 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/sport/201.jpg" alt="image du jeux ufc 3 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/sport/194.jpg" alt="image du jeux ufc 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/sport/203.jpg" alt="image du jeux w2018 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/sport/196.jpg" alt="image du jeux w2017 sur PS4"/>
        </div>
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


