<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PS4: GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <script type="text/javascript" href="../js/script.js"></script>
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