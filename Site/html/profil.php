<?php
session_start();

include ('./dbconnect.php');

if(isset($_GET['id']) AND $_GET['id'] > 0) {

    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $info = $requser->fetch();

    ?>



    <!DOCTYPE html>
    <html>
    <head>

        <?php

        include('./head.php');
        ?>
        <title>GamingKeys - Profil</title>

    </head>

    <body>

    <?php

    include('./header.php');
    ?>

    <div align="center">

        <h2 class="pseudo_profil"> Profil de <?= $info['pseudo']; ?> </h2>


        <?php

          if(!empty($info['avatar']))
          {
          ?>

            <img class="img_profil" src="membres/avatars/<?= $info['avatar']; ?>"/>

          <?php
          }
          ?>

        <p class="text_profil">  Pseudo : <?= $info['pseudo']; ?> </p>

        <p class="text_profil"> Mail : <?= $info['mail']; ?> </p>

        <br />

        <?php

        if(isset($_SESSION['id']) AND $info['id'] == $_SESSION['id']) {

            ?>

            <button class="btn_profil"> <a href="./editionprofil.php"> Editer mon profil </a> </button>
            <button class="btn_profil"> <a href="./deconnexion.php"> Se déconnecter </a> </button>

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
