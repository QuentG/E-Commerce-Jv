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
    <h1 id="titre_slider">Top 10 des ventes du moment sur XBOX ONE</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/xboxOne/action/2228.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/action/108668b.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/2227.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/71cNKTRFJjL._AC_SX430_.jpg" alt="image du jeux Forza Motorsport 7 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/943.jpg" alt="image du jeux the witcher 3 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/10694913.jpg" alt="image du jeux NBA 2K18 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/combat/1505305015-5789-jaquette-avant.jpg" alt="image du jeux Tekken 7 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/combat/injustice_2_cover___xbox_one_by_johngohex-da5qwgn.png" alt="image du jeux injustice 2 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/sport/madden-nfl-18-jeu-xbox-one.jpg" alt="image du jeux Madden NFL 18 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/1465995560-4492-jaquette-avant.jpg" alt="image du jeux South Park : L'Annale du Destin sur Xbox One"/></li>
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

