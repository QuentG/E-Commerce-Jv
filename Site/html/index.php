<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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


<div class="container">
    <!--logo du site-->
    <div>
        <img id="logo" src="../img/Logo.png" alt="image du logo du site"/>
    </div>
    <!--nav bar-->
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="niveau1"> <a href="PC.php">PC</a>
                    <ul class="niveau2">
                        <li><a class="nav-link" href="aventurePC.php">Aventure</a></li>
                        <li><a class="nav-link" href="actionPC.php">Action</a></li>
                        <li><a class="nav-link" href="combatPC.php">Combat</a></li>
                        <li><a class="nav-link" href="sportPC.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="PS4.php">PS4</a>
                    <ul class="niveau2">
                        <li><a class="nav-link" href="aventurePS4.php">Aventure</a></li>
                        <li><a class="nav-link" href="actionPS4.php">Action</a></li>
                        <li><a class="nav-link" href="combatPS4.php">Combat</a></li>
                        <li><a class="nav-link" href="sportPS4.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="XboxONE.php">XBOX ONE</a>
                    <ul class="niveau2">
                        <li><a class="nav-link"  href="aventureXboxOne.php">Aventure</a></li>
                        <li><a class="nav-link" href="actionXboxOne.php">Action</a></li>
                        <li><a class="nav-link" href="combatXboxOne.php">Combat</a></li>
                        <li><a class="nav-link" href="sportXboxOne.php">Sport</a></li>
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Recherche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
            </form>
            <button id="btninsciption" type="button"> <a href="./inscription.php">Inscription </a></button>
            <button id="btnconnexion" type="button"> <a href="./inscription.php"> Connexion </a> </button>
        </div>
    </nav>
    <!--fin nav bar-->
</div>

<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Waw on va mettre du texte ça va être trop bien.</p>
</div>
<!--titre slider-->
<div id="fond">
    <h1 id="titre_slider">Top 3 des ventes du moment sur PC, PS4 & XBOX ONE</h1>
    <!--slider-->
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
            <li><img class="image_slider" src="../img/pc/sport/91xtxVeMLHL._SL1500_.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/jaquette-grand-theft-auto-v-pc-cover-avant-g-1415122060.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/9139QQmsbdL._SL1500.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/ps4/action/cod-wwii-ps4-front-en_2000x.png" alt="image  du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/action/jaquette-grand-theft-auto-v-playstation-4-ps4-cover-avant-g-1415122088.jpg" alt="image  du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/sport/166433-ps4-gtsport-standard.png" alt="image  du jeux gran turismo sport sur PS4"/></li>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/xboxOne/action/2228.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/action/108668b.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/aventure/2227.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>

        </ul>
    </div>
</div>

<?php include_once('./footer.php'); ?>


</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<!--Slider-->
<script type="text/javascript">
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });

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


