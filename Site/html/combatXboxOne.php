<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include ('./head.php');

    ?>

</head>

<body>
<div id="resp_1" class="row">
    <div class="col-sm-3">
        <img class="image" src="../img/xboxOne/combat/281.jpg" alt="image du jeux Angry Birds Star wars sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/282.jpg" alt="image du jeux Battlefield hardline sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/277.jpg" alt="image du jeux Ben 10 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/270.jpg" alt="image du jeux Dead or alive 5 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image" src="../img/xboxOne/combat/269.jpg" alt="image du jeux Divinity sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/279.jpg" alt="image du jeux Dungeons sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/273.jpg" alt="image du jeux Dragonball fighter sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/278.jpg" alt="image du jeux DragonBall Xenoverse 2 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image" src="../img/xboxOne/combat/266.jpg" alt="image du jeux Fighter Within sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/274.jpg" alt="image du jeux Fortnite sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/272.jpg" alt="image du jeux GTA V sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/280.jpg" alt="image du jeux Injustice 2 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image" src="../img/xboxOne/combat/286.jpg" alt="image du jeux La terre du milieu sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/287.jpg" alt="image du jeux Lock's Quest sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/284.jpg" alt="image du jeux Marvel vs Capcom sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/283.jpg" alt="image du jeux Mortal Kombat X sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image" src="../img/xboxOne/combat/268.jpg" alt="image du jeux Naruto shippuden Storm 4 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/285.jpg" alt="image du jeux Ninjago sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/271.jpg" alt="image du jeux one piece sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image1" src="../img/xboxOne/combat/288.jpg" alt="image du jeux Rad Rodgers sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img id="image1" src="../img/xboxOne/combat/267.jpg" alt="image du jeux Sonic Forces sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image2" src="../img/xboxOne/combat/289.jpg" alt="image du jeux South Park sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image2" src="../img/xboxOne/combat/275.jpg" alt="image du jeux Tekken 7 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="image2" src="../img/xboxOne/combat/276.JPG" alt="image du jeux Tomclancy's sur Xbox ONE"/>
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


