<?php

    if(isset($_SESSION['id']) AND !empty(isset($_SESSION['id'])))
    {
?>


<!--Nav bar si la personne est connecté-->
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
    </div>

    <div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0;">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="../html/index.php">Accueil<b></b></a>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PC<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/PC.php">Accueil PC</a></li>
                    <li><a href="../html/jeux.php">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PS4<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/PS4.php">Accueil PS4</a></li>
                    <li><a href="#">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">XBOX ONE<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/XboxONE.php">Accueil XBOX ONE</a></li>
                    <li><a href="#">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#"">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

        </ul>
        <a href="../html/index.php" title="Vers la page d'accueil"> <img id="logo" src="../img/Logo.png" alt="Logo du site"/></a>

        <form class="navbar-form pull-right">
           <p class="Welcome"> Bienvenue <?= $_SESSION['pseudo']; ?> </p>
            <button id="btninsciption" type="button"> <a href="./profil.php?id=<?= $_SESSION['id']; ?>">Profil </a></button>
            <button id="btnconnexion" type="button"> <a href="./deconnexion.php"> Deconnexion </a> </button>
        </form>
    </div>
</nav>

<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Bienvenue sur GamingKeys.</p>
</div>
<!--Fin Nav bar-->

        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript">

            $(function() {
                // Affichage du sous menu en douceur
                jQuery('ul.nav li.dropdown').hover(function() {
                    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
                }, function() {
                    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
                });

            });

        </script>


        <?php

         }else {

        ?>


<!--Nav bar si la personne n'est pas connecté-->
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-md hidden-lg" href="#">Menu</a>
    </div>

    <div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0;">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="../html/index.php">Accueil<b></b></a>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PC<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/PC.php">Accueil PC</a></li>
                    <li><a href="../html/jeux.php">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PS4<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/PS4.php">Accueil PS4</a></li>
                    <li><a href="#">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">XBOX ONE<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/XboxONE.php">Accueil XBOX ONE</a></li>
                    <li><a href="#">Aventure</a></li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#"">Combat</a></li>
                    <li><a href="#">Sport</a></li>
                </ul>
            </li>

        </ul>
        <a href="../html/index.php" title="Vers la page d'accueil"> <img id="logo" src="../img/Logo.png" alt="Logo du site"/></a>


        <form class="navbar-form pull-right">
            <button id="btninsciption" type="button"> <a href="./inscription.php">Inscription </a></button>
            <button id="btnconnexion" type="button"> <a href="./connexion.php"> Connexion </a> </button>
        </form>
    </div>
</nav>

<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Bienvenue sur GamingKeys.</p>
</div>
<!--Fin Nav bar-->

        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript">

            $(function() {
                // Affichage du sous menu en douceur
                jQuery('ul.nav li.dropdown').hover(function() {
                    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
                }, function() {
                    jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
                });

            });

        </script>

<?php } ?>


