<?php

session_start();

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

<body onload="loadFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="load-div" class="animate-bottom">

<script>

    var varLoad;

    function loadFunction() {
    varLoad = setTimeout(showPage, 1700);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("load-div").style.display = "block";
    }

</script>

<?php

include('./header.php');

?>
<!--debut du reponsive à parir 1120px-->
<div id="responsive">
    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur PC</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux pc-->
        <img class="image_jeux" src="../img/94.jpg" alt="image du jeux Fifa 18 sur PC"/>
        <img class="image_jeux" src="../img/53.jpg" alt="image du jeux Grand Theft Auto V sur PC"/>
        <img class="image_jeux" src="../img/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/>

    </div>

    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur PS4</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux PS4-->
        <img class="image_jeux" src="../img/132.jpg" alt="image  du jeux Call of duty World War II sur PS4"/>
        <img class="image_jeux" src="../img/136.jpg" alt="image  du jeux grand theft auto v sur PS4"/>
        <img class="image_jeux" src="../img/200.jpg" alt="image  du jeux gran turismo sport sur PS4"/>
    </div>

    <div class="titre_slider1">
        <h2>Top 3 des ventes du moment sur XBOX ONE</h2>
    </div>
    <div class="image_jeux1">
        <!--top des jeux Xbox ONE-->
        <img class="image_jeux" src="../img/231.jpg" alt="image du jeux assassin creed origin sur Xbox One"/>
        <img class="image_jeux" src="../img/233.jpg" alt="image du jeux halo 5 sur Xbox One"/>
        <img class="image_jeux" src="../img/256.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/>
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
            <li><img class="image_slider" src="../img/94.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/53.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/36.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/132.jpg" alt="image  du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/136.jpg" alt="image  du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/200.jpg" alt="image  du jeux gran turismo sport sur PS4"/></li>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/231.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/233.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/256.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>

        </ul>
    </div>
</div>


<?php  include_once('./footer.php'); ?>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script>

    // Slider
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });


</script>

</html>


