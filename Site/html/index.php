<?php

session_start();

include('./header.php');

?>

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
<!--debut du reponsive à parir 1120px-->
<div id="responsive">
    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur PC</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux pc-->
        <img class="image_jeux" src="../img/pc/sport/94.jpg" alt="image du jeux Fifa 18 sur PC"/>
        <img class="image_jeux" src="../img/pc/action/53.jpg" alt="image du jeux Grand Theft Auto V sur PC"/>
        <img class="image_jeux" src="../img/pc/action/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/>

    </div>

    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur PS4</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux PS4-->
        <img class="image_jeux" src="../img/ps4/action/132.jpg" alt="image  du jeux Call of duty World War II sur PS4"/>
        <img class="image_jeux" src="../img/ps4/action/136.jpg" alt="image  du jeux grand theft auto v sur PS4"/>
        <img class="image_jeux" src="../img/ps4/sport/200.jpg" alt="image  du jeux gran turismo sport sur PS4"/>
    </div>

    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur XBOX ONE</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux Xbox ONE-->
        <img class="image_jeux" src="../img/xboxOne/action/231.jpg" alt="image du jeux assassin creed origin sur Xbox One"/>
        <img class="image_jeux" src="../img/xboxOne/action/233.jpg" alt="image du jeux halo 5 sur Xbox One"/>
        <img class="image_jeux" src="../img/xboxOne/aventure/256.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/>
        </div>
</div>
<!--fin du reponsive à parir 1120px-->

<!--titre slider-->
<div id="fond">
    <h1 id="titre_slider">Top 3 des ventes du moment sur PC, PS4 & XBOX ONE</h1>
    <!--slider-->
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
            <li><img class="image_slider" src="../img/pc/sport/94.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/53.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/ps4/action/132.jpg" alt="image  du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/action/136.jpg" alt="image  du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/sport/200.jpg" alt="image  du jeux gran turismo sport sur PS4"/></li>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/xboxOne/action/231.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/action/233.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/256.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>

        </ul>
    </div>
</div>

<?php  include_once('./footer.php'); ?>

</body>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
    /*début slider*/
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });
    /*fin slider*/
    // Effet Fondus
    /* setInterval(Frames,50);
     function Frames(){
         var pos = $(".slideshow ul").find(":eq(3)").position();
         pos.left = Math.abs(390-Math.abs(300-pos.left))/370;
         console.log(pos.left);
         $(".slideshow ul").find(":eq(6)").css("opacity",pos.left);
     }; */

</script>

</html>


