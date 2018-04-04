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
    <h1 id="titre_slider">Top 10 des ventes du moment sur PS4</h1>
    <div class="slideshow">
        <ul>
           <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/ps4/action/cod-wwii-ps4-front-en_2000x.png" alt="image du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/aventure/jaquette-grand-theft-auto-v-playstation-4-ps4-cover-avant-g-1415122088.jpg" alt="image du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/sport/166433-ps4-gtsport-standard.png" alt="image du jeux gran turismo sport sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/action/161376.jpg" alt="image du jeux Wolfenstein II : The New Colossus sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/aventure/C0R4myqWgAERMF2__92896_zoom.jpg" alt="image du jeux  Crash Bandicoot N. Sane Trilogy sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/aventure/cover_large.jpg" alt="image du jeux Full Throttle Remastered sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/action/81CNQe3zmEL._SL1500_.jpg" alt="image du jeux Fortnite sur PC"/></li>
            <li><img class="image_slider" src="../img/ps4/action/téléchargement (1).jpg" alt="image  du jeux Hellblade sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/action/1512466645-7362-jaquette-avant.jpg" alt="image du jeux Rainbow Six: Siege sur PC"/></li>
            <li><img class="image_slider" src="../img/ps4/action/ud340_d827da85.jpg" alt="image du jeux Final Fantasy XII : The Zodiac Age sur PS4"/></li>
        </ul>
    </div>
</div>
    <?php include('./footer.php'); ?>


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

