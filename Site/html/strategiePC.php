<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC strategie: GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/PC.css"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link type="text/php" href="../html/recup.php"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
</head>

<body>



<div class="container">
    <!--logo du site-->
    <div>
        <img id="logo" src="../img/Logo.png" alt="image du logo du site">
    </div>
    <!--nav bar-->
    <nav class="navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"> <a href="index.php" target="_blank">Accueil</a> </li>
                <li> <a href="PC.php" target="_blank">PC</a> </li>
                <li> <a href="PS4.php" target="_blank">PS4</a> </li>
                <li> <a href="XboxONE.php" target="_blank">XBOX ONE</a> </li>
            </ul>
            <form class="navbar-form navbar-right inline-form">
                <div class="form-group">
                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>
        </div>
    </nav>
</div>

<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Waw on va mettre du texte ça va être trop bien.</p>
</div>

<div id="categorie">
    <!--Sommaire pour le PC-->
    <p class="TitreCat">Catégorie PC</p>
    <ul class="liste1">
        <li><a href="aventurePC.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionPC.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatPC.php"><button class="bouton">Combat</button></a></li>
        <li><button class="bouton">Stratégie</button></li>
    </ul>
    <!--Sommaire pour la PS4-->
    <p class="TitreCat">Catégorie Playsation 4</p>
    <ul class="liste1">
        <li><a href="aventurePS4.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionPS4.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatPS4.php"><button class="bouton">Combat</button></a></li>
        <li><a href="strategiePS4.php"><button class="bouton">Stratégie</button></a></li>
    </ul>
    <!--Sommaire pour l'Xbox one-->
    <p class="TitreCat">Catégorie Xbox ONE</p>
    <ul class="liste1">
        <li><a href="aventureXboxOne.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionXboxOne.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatXboxOne.php"><button class="bouton">Combat</button></a></li>
        <li><a href="strategieXboxOne.php"><button class="bouton">Stratégie</button></a></li>
    </ul>
</div>
<div>
    <h1 id="titre_slider">Top 10 des ventes du moment sur PC</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
            <li><img class="image_slider" src="../img/pc/91xtxVeMLHL._SL1500_.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/d2_pc.0.png" alt="image du jeux Destiny 2 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/9139QQmsbdL._SL1500.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/1496311184-9714-jaquette-avant.png" alt="image du jeux Vanquish sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/game_cover_1052f4a2da47129cf533158864200bc2.jpg" alt="image du jeux Divinity : Original Sin II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/PRECOMMANDE-Injustice-2-Mix-PC-Sortie-18-05-2017.jpg" alt="image du jeux Injustice II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/téléchargement (1).jpg" alt="image du jeux What Remains of Edith Finch sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/téléchargement (2).jpg" alt="image du jeux Dishonored : La Mort de l'Outsider sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/téléchargement (3).jpg" alt="image du jeux XCOM 2 - War of the Chosen sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/téléchargement.jpg" alt="image du jeux bayonetta sur PC"/></li>
        </ul>
    </div>
</div>


<?php include('footer.php'); ?>


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
</script>

</html>

<!-- <form method="post" action="">
    <input type="text" name="pseudo" placeholder="pseudo"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="mail" name="mail" placeholder="mail"/>
    <button type="submit" name="envoyer">Envoyer</button>
</form>