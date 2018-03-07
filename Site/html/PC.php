<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC: GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
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
                <li class="niveau1"> <a href="PC.php">PC</a>
                    <ul class="niveau2">
                        <li><a href="aventurePC.php">Aventure</a></li>
                        <li><a href="actionPC.php">Action</a></li>
                        <li><a href="combatPC.php">Combat</a></li>
                        <li><a href="sportPC.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="PS4.php">PS4</a>
                    <ul class="niveau2">
                        <li><a href="aventurePS4.php">Aventure</a></li>
                        <li><a href="actionPS4.php">Action</a></li>
                        <li><a href="combatPS4.php">Combat</a></li>
                        <li><a href="sportPS4.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="XboxONE.php">XBOX ONE</a>
                    <ul class="niveau2">
                        <li><a href="aventureXboxOne.php">Aventure</a></li>
                        <li><a href="actionXboxOne.php">Action</a></li>
                        <li><a href="combatXboxOne.php">Combat</a></li>
                        <li><a href="sportXboxOne.php">Sport</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right inline-form">
                <div class="form-group">
                    <input type="search" class="input-sm form-control" placeholder="Recherche">
                    <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                </div>
            </form>
            <button id="btninsciption" type="button"> <a href="./inscription.php">Inscription </a></button>
            <button id="btnconnexion" type="button"> <a href="./inscription.php"> Connexion </a> </button>
        </div>
    </nav>
</div>

<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Waw on va mettre du texte ça va être trop bien.</p>
</div>

<div id="fond">
    <h1 id="titre_slider">Top 10 des ventes du moment sur PC</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
            <li><img class="image_slider" src="../img/pc/sport/91xtxVeMLHL._SL1500_.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/6e1cd1cee54368df1abc843a347a4346.jpg" alt="image du jeux Ghost Recon: Wildlands sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/9139QQmsbdL._SL1500.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/1496311184-9714-jaquette-avant.png" alt="image du jeux Vanquish sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/810i1JU82-L._SL1500_.jpg" alt="image du jeux Rocket league sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/PRECOMMANDE-Injustice-2-Mix-PC-Sortie-18-05-2017.jpg" alt="image du jeux Injustice II sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/aventure/jaquette-grand-theft-auto-v-pc-cover-avant-g-1415122060.jpg" alt="image du jeux Grand Theft Auto V sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/action/Dishonored_2.jpg" alt="image du jeux Dishonored 2"/></li>
            <li><img class="image_slider" src="../img/pc/action/fhmw07hz085z.jpg" alt="image du jeux Playerunknown's Battlegrounds sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/aventure/item_1834769_135.jpg" alt="image du jeux bayonetta sur PC"/></li>
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

