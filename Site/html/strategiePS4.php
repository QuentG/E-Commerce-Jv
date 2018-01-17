<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PS4 strategie: GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/PS4.css"/>
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
                <li class="active"> <a href="index.php">Accueil</a> </li>
                <li> <a href="PC.php">PC</a> </li>
                <li> <a href="PS4.php">PS4</a> </li>
                <li> <a href="XboxONE.php">XBOX ONE</a> </li>
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
        <li><a href="strategiePC.php"><button class="bouton">Stratégie</button></a></li>
    </ul>
    <!--Sommaire pour la PS4-->
    <p class="TitreCat">Catégorie Playsation 4</p>
    <ul class="liste1">
        <li><a href="aventurePS4.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionPS4.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatPS4.php"><button class="bouton">Combat</button></a></li>
        <li><button class="bouton">Stratégie</button></li>
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
    <h1 id="titre_slider">Top 10 des ventes du moment sur PS4</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/ps4/cod-wwii-ps4-front-en_2000x.png" alt="image du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/jaquette-grand-theft-auto-v-playstation-4-ps4-cover-avant-g-1415122088.jpg" alt="image du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/166433-ps4-gtsport-standard.png" alt="image du jeux gran turismo sport sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/161376.jpg" alt="image du jeux Wolfenstein II : The New Colossus sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/C0R4myqWgAERMF2__92896_zoom.jpg" alt="image du jeux  Crash Bandicoot N. Sane Trilogy sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/cover_large.jpg" alt="image du jeux Full Throttle Remastered sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/shadow-tactics-blades-of-the-shogun-ps4-1511897711.jpg" alt="image du jeux Shadow Tactics : Blades of the Shogun sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/téléchargement (1).jpg" alt="image  du jeux Hellblade sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/téléchargement.jpg" alt="image du jeux Yakuza Kiwami sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/ud340_d827da85.jpg" alt="image du jeux Final Fantasy XII : The Zodiac Age sur PS4"/></li>
        </ul>
    </div>
</div>


<?php include('footer.html'); ?>


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