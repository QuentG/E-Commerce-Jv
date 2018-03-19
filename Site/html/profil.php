<?php

session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage() );
}

if(isset($_GET ['id']) AND $_GET ['id'] > 0 ) {

    $getid = intval($_GET ['id']);
    $recupuser = $pdo->prepare('SELECT * FROM membres WHERE id = ?');
    $recupuser->execute(array($getid));
    $userinfo->$recupuser->fetch();


    ?>

    <html>
    <head>

        <meta charset="utf-8">
        <title> Page de profil </title>
        <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
        <link type="text/css" rel="stylesheet" href="../css/style.css"/>


    </head>

    <body>

    <div align="center">

        <h2>Profil de <?php echo $userinfo['pseudo']; ?> </h2>

        <br />  <br />

        Pseudo = <?php echo $userinfo['pseudo']; ?>

        <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
            ?>

            <br />

            <a href="../html/profiledition.php"> Editer mon profil </a>
            <a href="../html/deconnexion.php"> Deconnexion </a>

            <?php
             }
            ?>
    </div>

    </body>
    </html>














    <?php
      }
        ?>