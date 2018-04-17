<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include ('./head.php');

    ?>

</head>

<body>
<div>
    <!--Liste des jeux-->
    <div id="resp_1" class="row">
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/aventure/10.jpg" alt="image du jeux Ark: Survival Evolved sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/14.jpg" alt="image du jeux Batman: Arkham City GOTY sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/13.jpg" alt="image du jeux bayonetta sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/9.jpg" alt="image du jeux Darksiders Warmastered Edition sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/aventure/6.jpg" alt="image du jeux Dead Rising 2 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/22.jpg" alt="image du jeux Dragon Ball Xenoverse 2 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/11.jpg" alt="image du jeux Elex sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/5.jpg" alt="image du jeux Fallout 4 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/aventure/1.jpg" alt="image du jeux Ghost Recon: Wildlands sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/15.jpg" alt="image du jeux Grand Theft Auto V sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/19.jpg" alt="image du LEGO Harry Potter: Years 1-4 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/18.jpg" alt="image du jeux Just Cause 3 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/aventure/4.jpg" alt="image du jeux Naruto Shippuden: Ultimate Ninja Storm 4 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/12.jpg" alt="image du jeux Playerunknown's Battlegrounds sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/16.jpg" alt="image du jeux Rage sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/2.jpg" alt="image du jeux Rise of the Tomb Raider 20th Anniversary sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/pc/aventure/21.jpg" alt="image du jeux Spintires: Camions tout-terrain Simulator sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/7.jpg" alt="image du jeux The Division: Season Pass sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/20.jpg" alt="image du jeux The Escapists 2 sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/8.jpg" alt="image du jeux The Hunter: Call of the Wild sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/pc/aventure/3.jpg" alt="image du jeux The walking dead sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/aventure/23.jpg" alt="image du jeux The Witcher 3: Wild Hunt GOTY sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/aventure/24.jpg" alt="image du jeux Tom Clancy's Rainbow Six Siege sur PC"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/pc/aventure/17.jpg" alt="image du jeux Tom raider sur PC"/>
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
