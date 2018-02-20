<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="../css/inscription.css"/>
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
        <img id="logo" src="../img/Logo.png" alt="image du logo du site"/>
    </div>
    <!--nav bar-->
    <nav class="navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"> <a href="#">Accueil</a> </li>
                <li class="niveau1"> <a href="PC.php" target="_blank">PC</a>
                    <ul class="niveau2">
                        <li><a href="aventurePC.php">Aventure</a></li>
                        <li><a href="actionPC.php">Action</a></li>
                        <li><a href="combatPC.php">Combat</a></li>
                        <li><a href="sportPC.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="PS4.php" target="_blank">PS4</a>
                    <ul class="niveau2">
                        <li><a href="aventurePS4.php">Aventure</a></li>
                        <li><a href="actionPS4.php">Action</a></li>
                        <li><a href="combatPS4.php">Combat</a></li>
                        <li><a href="sportPS4.php">Sport</a></li>
                    </ul>
                </li>
                <li class="niveau1"> <a href="XboxONE.php" target="_blank">XBOX ONE</a>
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

    <div id="inscription">

    <h2 class="ash">Enregistrement</h2>

        <form action="./register.php" method="POST">
            <label>Identifiant :</label>
            <input type="text" name="username" required /> <br /> <br />

            <label>Mot de passe :</label>
            <input type="password" name="password" required /> <br /> <br />

            <label>Retapez mot de passe :</label>
            <input type="password" name="password2" required /> <br /> <br />
            <input type="submit" />
        </form>
        <br />
        <hr />

    </div>

    <div id="connexion">

    <h2 class="ash">Connexion</h2>

        <form action="./index.php" method="POST">
            <label>Identifiant :</label>
            <input type="text" name="username" required /> <br /> <br />

            <label>Mot de passe :</label>
            <input type="password" name="password" required /> <br /> <br />

            <input type="submit" />

        </form>

    </div>

</body>
</html>







