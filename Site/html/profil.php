<?php
session_start();

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', '');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

if(isset($_GET['id']) AND $_GET['id'] > 0) {

    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

    ?>

    <?php

      include('./header.php');
    ?>

    <!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>
        <title>GamingKeys - Profil</title>

    </head>

    <body>

    <div align="center">

        <h2> Profil de <?= $userinfo['pseudo']; ?> </h2>

        <br /> <br />

        <?php

          if(!empty($userinfo['avatar']))
          {
          ?>

            <img src="membres/avatars/<?= $userinfo['avatar']; ?>" width="150" />

          <?php
          }
          ?>

          <br /> <br />

        Pseudo = <?= $userinfo['pseudo']; ?>

        <br />

        Mail = <?= $userinfo['mail']; ?>

        <br />

        <?php

        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {

            ?>

            <br />
            <a href="editionprofil.php"> Editer mon profil </a>
            <a href="deconnexion.php"> Se déconnecter </a>

            <?php

        }
        ?>

    </div>

      <?php include('footer.php'); ?>

    </body>

    </html>

    <?php
}
?>
