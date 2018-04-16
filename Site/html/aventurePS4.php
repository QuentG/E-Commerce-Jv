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
            <img class="img-responsive image" src="../img/ps4/aventure/147.jpg" alt="image du jeux Ark: Survival Evolved sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/144.jpg" alt="image du jeux Assassin's Creed Origins sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/150.jpg" alt="image du jeux bloodborne sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/155.jpg" alt="image du jeux Call of duty ww 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/aventure/154.jpg" alt="image du jeux crash bandicoot sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/143.jpg" alt="image du jeux Dark Souls II sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/164.jpg" alt="image du jeux dishonored 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/158.jpg" alt="image du jeux gta 5 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/aventure/146.jpg" alt="image du jeux Farcry 5 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/156.jpg" alt="image du jeux full throttle sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/163.jpg" alt="image du jeux hellblade sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/157.jpg" alt="image du jeux Hitman 6 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/aventure/165.jpg" alt="image du jeux horizon zero dawn sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/161.jpg" alt="image du jeux l.a. noire sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/162.jpg" alt="image du jeux La Terre du Milieu : L'Ombre du Mordor sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/159.jpg" alt="image du jeux La Grande Aventure Lego, le jeu vidéo sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/aventure/153.jpg" alt="image du jeux Metal Gear Survive sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/145.jpg" alt="image du jeux The last guardian sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/160.jpg" alt="image du jeux The Last of Us Remastered sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/142.jpg" alt="image du jeux uncharted 4 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/aventure/151.jpg" alt="image du jeux uncharted the lost legacy sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/aventure/149.jpg" alt="image du jeux witcher 3 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/aventure/148.jpg" alt="image du jeux Wolfenstein II: The New Colossus sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/aventure/152.jpg" alt="image du jeux yakuza kiwami sur PS4"/>
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


