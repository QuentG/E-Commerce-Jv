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
<!--nav bar-->
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

    <div class="collapse navbar-collapse" id="main-menu" style="margin-bottom: 0px;">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="../html/index.php">Accueil<b></b></a>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PC<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/index.php">Accueil</a> </li>
                    <li><a href="../html/PC.php">Accueil PC</a></li>
                    <li><a href="../html/aventurePC.php">Aventure</a></li>
                    <li><a href="../html/actionPC.php">Action</a></li>
                    <li><a href="../html/combatPC.php">Combat</a></li>
                    <li><a href="../html/sportPC.php">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PS4<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/index.php">Accueil</a> </li>
                    <li><a href="../html/PS4.php">Accueil PS4</a></li>
                    <li><a href="../html/aventurePS4.php">Aventure</a></li>
                    <li><a href="../html/actionPS4.php">Action</a></li>
                    <li><a href="../html/combatPS4.php">Combat</a></li>
                    <li><a href="../html/sportPS4.php">Sport</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a data-toggle="dropdown" href="#">XBOX ONE<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
                    <li><a href="../html/index.php">Accueil</a> </li>
                    <li><a href="../html/XboxONE.php">Accueil XBOX ONE</a></li>
                    <li><a href="../html/aventureXboxOne.php">Aventure</a></li>
                    <li><a href="../html/actionXboxOne.php">Action</a></li>
                    <li><a href="../html/combatXboxOne.php">Combat</a></li>
                    <li><a href="../html/sportXboxOne.php">Sport</a></li>
                </ul>
            </li>

        </ul>
        <a href="../html/index.php" title="liens vers la page d'accueil"> <img id="logo" src="../img/Logo.png" alt="image du logo du site"/></a>

        <form class="navbar-form pull-right">
            <input id="recherche" type="text" style="width:150px"  placeholder="Recherche">
            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> </button>
        </form>

        <form class="navbar-form pull-right">
            <button id="btninsciption" type="button"> <a href="./inscription.php">Inscription </a></button>
            <button id="btnconnexion" type="button"> <a href="./inscription.php"> Connexion </a> </button>
        </form>
    </div>
</nav>
<div class="jumbotron">
    <h1>GamingKeys !</h1>
    <p> Waw on va mettre du texte ça va être trop bien.</p>
</div>
<!--fin nav bar-->

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
</script>

</html>


