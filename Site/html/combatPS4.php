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
            <img class="img-responsive image" src="../img/ps4/combat/180.jpg" alt="image du jeux dissidia final fantasy sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/177.jpg" alt="image du jeux dragon ball xenoverse XV sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/176.jpg" alt="image du jeux dragon ball xenoverse 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/181.jpg" alt="image du jeux Dragon Ball FighterZ sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/combat/169.jpg" alt="image du jeux For Honor sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/168.jpg" alt="image du jeux Guilty Gear Xrd sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/175.jpg" alt="image du jeux injustice 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/183.jpg" alt="image du jeux Injustice : Les Dieux sont Parmi Nous – Ultimate Edition sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/combat/173.jpg" alt="image du jeux J-Stars Victory Vs + sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/186.jpg" alt="image du jeux marvel vs capcom infinite sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/187.jpg" alt="image du jeux mortal kombat XL sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/184.jpg" alt="image du jeux mortal kombat X sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/combat/167.jpg" alt="image du jeux naruto ultimate ninja storm 4 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/188.jpg" alt="image du jeux Naruto to Boruto: Shinobi Striker sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/174.jpg" alt="image du jeux Street Saint Seiya: Soldiers' Soul sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/170.jpg" alt="image du jeux Street Fighter V sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/combat/185.jpg" alt="image du jeux The King of Fighters XIV sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/171.jpg" alt="image du jeu tekken7"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/189.jpg" alt="image du jeux Under Night In-Birth sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/166.jpg" alt="image du jeux ufc 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/combat/182.jpg" alt="image du jeux ufc sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/combat/179.jpg" alt="image du jeux Ultimate Marvel vs. Capcom 3 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/combat/178.jpg" alt="image du jeux w2018 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/combat/172.jpg" alt="image du jeux w2016 sur PS4"/>
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

