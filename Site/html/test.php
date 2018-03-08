<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Menu Plusieurs niveaux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/test.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



    <style>
        .dropdown-submenu{position:relative;}
        .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
        .dropdown-submenu:hover>.dropdown-menu{display:block;}
        .dropdown-submenu>a:after{display:block;content:" ";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
        .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
        .blue{color:#1D38FC}
        .green{color:#0EC929}
        .red{color:#FF0000}
        .orange{color:#ffe100}
    </style>

</head>
<body>


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
                <a data-toggle="dropdown" href="../html/index.php">Accueil<b></b></a>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" href="#">PC<b class="caret"></b></a>
                <ul class="dropdown-menu jqueryFadeIn">
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
                    <li><a href="../html/XboxONE.php">Accueil XBOX ONE</a></li>
                    <li><a href="../html/aventureXboxOne.php">Aventure</a></li>
                    <li><a href="../html/actionXboxOne.php">Action</a></li>
                    <li><a href="../html/combatXboxOne.php">Combat</a></li>
                    <li><a href="../html/sportXboxOne.php">Sport</a></li>
                </ul>
            </li>

        </ul>
        <img id="logo" src="../img/Logo.png" alt="image du logo du site"/>

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


<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
    $(function() {
        // Affichage du sous menu en douceur
        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
        });

    });
</script>
</body>
</html>