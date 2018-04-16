<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include('./head.php');
    ?>

    <title> GamingKeys </title>

</head>

<body>
<div id="fond">
    <h1 id="titre_slider">Top 10 des ventes du moment sur XBOX ONE</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/xboxOne/action/231.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/action/233.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/256.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/290.jpg" alt="image du jeux Forza Motorsport 7 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/245.jpg" alt="image du jeux the witcher 3 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/294.jpg" alt="image du jeux NBA 2K18 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/combat/275.jpg" alt="image du jeux Tekken 7 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/combat/280.jpg" alt="image du jeux injustice 2 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/307.jpg" alt="image du jeux Madden NFL 18 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/261.jpg" alt="image du jeux South Park : L'Annale du Destin sur Xbox One"/></li>
        </ul>
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

