<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC action: GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/arkPC.css"/>
    <link type="text/css" rel="stylesheet" href="../css/slider.css"/>
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
        <li><button class="bouton">Action</button></li>
        <li><a href="combatPC.php"><button class="bouton">Combat</button></a></li>
        <li><a href="sportPC.php"><button class="bouton">Sport</button></a></li>
    </ul>
    <!--Sommaire pour la PS4-->
    <p class="TitreCat">Catégorie Playsation 4</p>
    <ul class="liste1">
        <li><a href="aventurePS4.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionPS4.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatPS4.php"><button class="bouton">Combat</button></a></li>
        <li><a href="sportPS4.php"><button class="bouton">Sport</button></a></li>
    </ul>
    <!--Sommaire pour l'Xbox one-->
    <p class="TitreCat">Catégorie Xbox ONE</p>
    <ul class="liste1">
        <li><a href="aventureXboxOne.php"><button class="bouton">Aventure</button></a></li>
        <li><a href="actionXboxOne.php"><button class="bouton"> Action</button></a></li>
        <li><a href="combatXboxOne.php"><button class="bouton">Combat</button></a></li>
        <li><a href="sportXboxOne.php"><button class="bouton">Sport</button></a></li>
    </ul>
</div>
<div>
<div id="jeux">
    <p id="titre"><strong>Ark: Survival Evolved</strong></p>
    <img id="image" src="../img/pc/action/ARK_Survival_Evolved_Download_Cover_Free_Game.jpeg" alt="image du jeux Ark: Survival Evolved sur PC"/>
</div>
<div id="parametre">
    <p>Date de sortie....................29 août 2017</p>
    <p>Plateforme........................PC/MAC</p>
    <p>Format du jeu.....................Téléchargeable</p>
    <p>Style.............................Action,Aventure,RPG,Mac,Multijoueur,Coopération,Linux,Indies</p>
    <p id="lanque">Langues...........................</p>
    <img class="drapeau" src="../img/pc/84170-image_448x448.png" alt="drapeaux de la France">
    <img class="drapeau" src="../img/pc/84172-image_450x450.png" alt="drapeaux de la Italie">
    <img class="drapeau" src="../img/pc/flag-3d-round-250 (1).png" alt="drapeaux de la Chine">
    <img class="drapeau" src="../img/pc/flag-3d-round-250 (2).png" alt="drapeaux de la Corée du sud">
    <img class="drapeau" src="../img/pc/flag-3d-round-250.png" alt="drapeaux de la Russie">
    <img class="drapeau" src="../img/pc/Germany_flag.jpg" alt="drapeaux de la Allemagne">
    <img class="drapeau" src="../img/pc/pologne-rond.png" alt="drapeaux de la Pologne">
    <img class="drapeau" src="../img/pc/rond-japonais.png" alt="drapeaux de la Japon">
    <img class="drapeau" src="../img/pc/spain_640.png" alt="drapeaux de la Espagne">
    <img class="drapeau" src="../img/pc/UK.png" alt="drapeaux de la Royaume unie">
</div>
</div>
<!--Début du slider-->
<span id="sl_play" class="sl_command">&nbsp;</span>
<span id="sl_pause" class="sl_command">&nbsp;</span>
<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>


<section id="slideshow">

    <a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
    <a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
    <a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
    <a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
    <a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
    <a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
    <a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
    <a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>


    <div id="slider">
        <div class="c_slider"></div>
        <div class="slider">
            <figure>
                <img src="#" alt="" width="640" height="310" />
                <figcaption>The mirror of soul</figcaption>
            </figure><!--
				--><figure>
                <img src="#" alt="" width="640" height="310" />
                <figcaption>Let's cross that bridge when we come to it</figcaption>
            </figure><!--
				--><figure>
                <img src="#" alt="" width="640" height="310" />
                <figcaption>Sushi<em>(do)</em> time</figcaption>
            </figure><!--
				--><figure>
                <img src="#" alt="" width="640" height="310" />
                <figcaption>Waking Life</figcaption>
            </figure>
        </div>
    </div>

    <span id="timeline"></span>

    <ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
    </ul>

</section>
<!--Fin du slider-->


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