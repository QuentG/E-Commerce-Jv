<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include('./head.php');
    ?>

    <title> GamingKeys </title>

</head>
<body>

<?php include('./header.php');?>

<div id="fond">
    <h1 id="titre_slider">Top 10 des ventes du moment sur PS4</h1>
    <div class="slideshow">
        <ul>
           <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/132.jpg" alt="image du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/158.jpg" alt="image du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/200.jpg" alt="image du jeux gran turismo sport sur PS4"/></li>
            <li><img class="image_slider" src="../img/127.jpg" alt="image du jeux Wolfenstein II : The New Colossus sur PS4"/></li>
            <li><img class="image_slider" src="../img/154.jpg" alt="image du jeux  Crash Bandicoot N. Sane Trilogy sur PS4"/></li>
            <li><img class="image_slider" src="../img/156.jpg" alt="image du jeux Full Throttle Remastered sur PS4"/></li>
            <li><img class="image_slider" src="../img/121.jpg" alt="image du jeux Fortnite sur PC"/></li>
            <li><img class="image_slider" src="../img/139.jpg" alt="image  du jeux Hellblade sur PS4"/></li>
            <li><img class="image_slider" src="../img/130.jpg" alt="image du jeux Rainbow Six: Siege sur PC"/></li>
            <li><img class="image_slider" src="../img/141.jpg" alt="image du jeux Final Fantasy XII : The Zodiac Age sur PS4"/></li>
        </ul>
    </div>
</div>

    <?php include('./footer.php'); ?>

</body>

<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">

    $(function() {
        // Affichage du sous menu en douceur
        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
        });

    });

    /*Slider*/
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });

</script>

</html>

