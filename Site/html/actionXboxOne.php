<?php
include('./header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include ('./head.php');

    ?>

</head>
<body>
<div>
    <!--liste des jeux-->
    <div id="resp_1" class="row">
        <div class="col-sm-3">
            <img class="image" src="../img/xboxOne/action/215.jpg" alt="image du jeux Assassin's Creed: Unity sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/216.jpg" alt="image du jeux Assassin's Creed 4: Black Flag sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/231.jpg" alt="image du jeux Assassin's Creed: Origins sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/217.jpg" alt="image du jeux Call of Duty: Advanced Warfare sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image" src="../img/xboxOne/action/219.jpg" alt="image du jeux Call of Duty: Ghosts sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/234.jpg" alt="image du jeux crackdown 3 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/228.jpg" alt="image du jeux Dark Souls 3 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/229.jpg" alt="image du jeux FarCry Primal sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image" src="../img/xboxOne/action/232.jpg" alt="image du jeux Gears of War: Ultimate sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/225.jpg" alt="image du jeux Gears of War 4 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/226.jpg" alt="image du jeux Halo Wars 2 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/233.jpg" alt="image du jeux Halo 5: Guardians sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image" src="../img/xboxOne/action/230.jpg" alt="image du jeux Mass Effect Andromeda  sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/235.jpg" alt="image du jeux Mortal Kombat X sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/227.jpg" alt="image du jeux Plants vs. Zombies: Garden Warfare 2 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/222.jpg" alt="image du jeux Quantum Break sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image" src="../img/xboxOne/action/221.jpg" alt="image du jeux Rise of the Tomb Raider sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/218.jpg" alt="image du jeux Ryse: Son of Rome sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/223.jpg" alt="image du jeux Sunset Overdrive sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/224.jpg" alt="image du jeux The Division  sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image1" src="../img/xboxOne/action/214.jpg" alt="image du jeux Titanfall sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image2" src="../img/xboxOne/action/220.jpg" alt="image du jeux Tomb Raider Definitive Edition sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image2" src="../img/xboxOne/action/237.jpg" alt="image du jeux Watch Dogs 2 sur Xbox ONE"/>
        </div>
        <div class="col-sm-3">
            <img class="image2" src="../img/xboxOne/action/236.jpg" alt="image du jeux WWE 2K18 sur Xbox ONE"/>
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
