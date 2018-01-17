<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GamingKeys</title>
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
                    <li class="active"> <a href="#">Accueil</a> </li>
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
        <div>
            <img id="logo1" src="../img/Logo.png" alt="image du logo du site">
        </div>
    </div>

    <div class="jumbotron">
        <h1>GamingKeys !</h1>
        <p> Waw on va mettre du texte ça va être trop bien.</p>
    </div>

        <div id="categorie">
            <!--Sommaire pour le PC-->
            <p class="TitreCat">Catégorie PC</p>
            <ul class="liste1">
                <li><a href="aventurePC.php" target="_blank"><button class="bouton">Aventure</button></a></li>
                <li><a href="actionPC.php" target="_blank"><button class="bouton"> Action</button></a></li>
                <li><a href="combatPC.php" target="_blank"><button class="bouton">Combat</button></a></li>
                <li><a href="strategiePC.php" target="_blank"><button class="bouton">Stratégie</button></a></li>
            </ul>
            <!--Sommaire pour la PS4-->
            <p class="TitreCat">Catégorie Playsation 4</p>
            <ul class="liste1">
                <li><a href="aventurePS4.php" target="_blank"><button class="bouton">Aventure</button></a></li>
                <li><a href="actionPS4.php" target="_blank"><button class="bouton"> Action</button></a></li>
                <li><a href="combatPS4.php" target="_blank"><button class="bouton">Combat</button></a></li>
                <li><a href="strategiePS4.php" target="_blank"><button class="bouton">Stratégie</button></a></li>
            </ul>
            <!--Sommaire pour l'Xbox one-->
            <p class="TitreCat">Catégorie Xbox ONE</p>
            <ul class="liste1">
                <li><a href="aventureXboxOne.php" target="_blank"><button class="bouton">Aventure</button></a></li>
                <li><a href="actionXboxOne.php" target="_blank"><button class="bouton"> Action</button></a></li>
                <li><a href="combatXboxOne.php" target="_blank"><button class="bouton">Combat</button></a></li>
                <li><a href="strategieXboxOne.php" target="_blank"><button class="bouton">Stratégie</button></a></li>
            </ul>
        </div>
    <div>
        <h1 id="titre_slider">Top 3 des ventes du moment sur PC, PS4 & XBOX ONE (test)</h1>
    <div class="slideshow">
        <ul>
            <!--top des jeux pc-->
            <li><img class="image_slider" src="../img/pc/91xtxVeMLHL._SL1500_.jpg" alt="image du jeux Fifa 18 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/d2_pc.0.png" alt="image du jeux Destiny 2 sur PC"/></li>
            <li><img class="image_slider" src="../img/pc/9139QQmsbdL._SL1500.jpg" alt="image du jeux Star Wars Battlefront II sur PC"/></li>
            <!--top des jeux PS4-->
            <li><img class="image_slider" src="../img/ps4/cod-wwii-ps4-front-en_2000x.png" alt="image  du jeux Call of duty World War II sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/jaquette-grand-theft-auto-v-playstation-4-ps4-cover-avant-g-1415122088.jpg" alt="image  du jeux grand theft auto v sur PS4"/></li>
            <li><img class="image_slider" src="../img/ps4/166433-ps4-gtsport-standard.png" alt="image  du jeux gran turismo sport sur PS4"/></li>
            <!--top des jeux Xbox ONE-->
            <li><img class="image_slider" src="../img/xboxOne/assassin_xbx_1024x1024.jpg" alt="image du jeux assassin creed origin sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/Halo-5xb1015-2.jpg" alt="image du jeux halo 5 sur Xbox One"/></li>
            <li><img class="image_slider" src="../img/xboxOne/la-terre-de-milieu-l-ombre-de-la-guerre-xbox-one.jpg" alt="image du jeux la terre de milieu l'ombre de la guerre sur Xbox One"/></li>

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

    // Effet Fondus
    setInterval(Frames,50);
    function Frames(){
        var pos = $(".slideshow ul").find(":eq(3)").position();
        pos.left = Math.abs(390-Math.abs(300-pos.left))/370;
        console.log(pos.left);
        $(".slideshow ul").find(":eq(6)").css("opacity",pos.left);
    };

</script>

</html>

<!-- <form method="post" action="">
    <input type="text" name="pseudo" placeholder="pseudo"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="mail" name="mail" placeholder="mail"/>
    <button type="submit" name="envoyer">Envoyer</button>
</form> -->
