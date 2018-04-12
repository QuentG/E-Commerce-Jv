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
<div id="fond">
    <h1 id="titre_slider">Top 10 des ventes du moment sur PC</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
<<<<<<< HEAD
            <li><img class="image_slider" src="../img/pc/sport/94.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/25.jpg" alt="image du jeux Ghost Recon: Wildlands sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/41.jpg" alt="image du jeux Vanquish sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/34.jpg" alt="image du jeux Rocket league sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/63.jpg" alt="image du jeux Injustice II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/aventure/15.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/46.jpg" alt="image du jeux Dishonored 2"/></li>
            <li><img class="image_slider" src="../img/pc/action/48.jpg" alt="image du jeux Playerunknown's Battlegrounds sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/aventure/13.jpg" alt="image du jeux bayonetta sur PC"/></li>
=======
            <li><img class="image_slider" src="../img/91xtxVeMLHL._SL1500_.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/6e1cd1cee54368df1abc843a347a4346.jpg" alt="image du jeux Ghost Recon: Wildlands sur PC"/></li>
            <li><img class="image_slider" src="../img/9139QQmsbdL._SL1500.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <li><img class="image_slider" src="../img/1496311184-9714-jaquette-avant.png" alt="image du jeux Vanquish sur PC"/></li>
            <li><img class="image_slider" src="../img/810i1JU82-L._SL1500_.jpg" alt="image du jeux Rocket league sur PC"/></li>
            <li><img class="image_slider" src="../img/PRECOMMANDE-Injustice-2-Mix-PC-Sortie-18-05-2017.jpg" alt="image du jeux Injustice II sur PC"/></li>
            <li><img class="image_slider" src="../img/jaquette-grand-theft-auto-v-pc-cover-avant-g-1415122060.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/Dishonored_2.jpg" alt="image du jeux Dishonored 2"/></li>
            <li><img class="image_slider" src="../img/fhmw07hz085z.jpg" alt="image du jeux Playerunknown's Battlegrounds sur PC"/></li>
            <li><img class="image_slider" src="../img/item_1834769_135.jpg" alt="image du jeux bayonetta sur PC"/></li>
>>>>>>> master
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
