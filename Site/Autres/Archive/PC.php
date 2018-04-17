
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
    <h1 id="titre_slider">Top 10 des ventes du moment sur PC</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->

            <li><img class="image_slider" src="../img/94.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/25.jpg" alt="image du jeux Ghost Recon: Wildlands sur PC"/></li>
            <li><img class="image_slider" src="../img/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <li><img class="image_slider" src="../img/41.jpg" alt="image du jeux Vanquish sur PC"/></li>
            <li><img class="image_slider" src="../img/34.jpg" alt="image du jeux Rocket league sur PC"/></li>
            <li><img class="image_slider" src="../img/63.jpg" alt="image du jeux Injustice II sur PC"/></li>
            <li><img class="image_slider" src="../img/15.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/46.jpg" alt="image du jeux Dishonored 2"/></li>
            <li><img class="image_slider" src="../img/48.jpg" alt="image du jeux Playerunknown's Battlegrounds sur PC"/></li>

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
