<?php
session_start();

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

if(isset($_SESSION['id'])) {

    $requser = $bdd->prepare("SELECT * FROM membres WHERE id=  ?");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

        // PSEUDO

    if (isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo'])
    {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo,  $_SESSION['id']));

      header('Location:profil.php?id='.$_SESSION['id']);
    }

        // MAIL

    if (isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail'])
    {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail,  $_SESSION['id']));

      header('Location:profil.php?id='.$_SESSION['id']);
    }

        // MOT DE PASSE

    if (isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2']))
    {

      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);

      if ($mdp1 == $mdp2)
      {
        $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
        $insertmdp->execute(array($mdp1, $_SESSION['id']));

        header('Location:profil.php?id='.$_SESSION['id']);
      }
      else
      {
        $msg = "Vos deux mots de passe ne correspondent pas ";
      }
    }

        // AVATAR

      if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
      {
          $tailleMax = 2097152;
          $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');


          if($_FILES['avatar']['size'] <= $tailleMax)
          {

            $extensionsUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));


            if(in_array($extensionsUpload, $extensionsValides))
            {

              $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionsUpload;
              $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);


              if($resultat)
              {

                $updateAvatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                $updateAvatar->execute(array(
                  'avatar' => $_SESSION['id'].".".$extensionsUpload,
                  'id' => $_SESSION['id']
                ));

                header('Location:profil.php?id='.$_SESSION['id']);

              }
              else
              {
                $msg = "Erreur durant l'importation de votre photo de profil";
              }
            }
              else
              {
                $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
              }
            }
            else
            {
              $msg = "Votre photo de profil ne doit pas depasser 2 Mo";
            }
      }

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
        <title>GamingKeys - Edition Du Profil</title>

    </head>

    <body>

    <div align="center">

        <h2> Edition de mon profil</h2>
        <div align="center">
        <form method="post" action="" enctype="multipart/form-data">

          <label> Pseudo : </label>
          <input type="text" name="newpseudo" placeholder="Pseudo" value="<?= $user['pseudo'];?>"/>
            <br /> <br />

            <label> Mail : </label>
            <input type="text" name="newmail" placeholder="Mail" value="<?= $user['mail'];?>"/>
            <br /> <br />

            <label> Mot de passe : </label>
            <input type="password" name="newmdp1" placeholder="Mot de passe"/>
            <br /> <br />

            <label> Confirmation du mot de passe : </label>
            <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe"/>
            <br /> <br />

            <label> Avatar : </label>
            <input type="file" name="avatar"/>
            <br /> <br />

            <input type="submit" value="Mettre à jour mon Profil"/>
          </div>


          <?php

            if(isset($msg))

              echo $msg;

            ?>

    </div>

      <?php include('footer.php'); ?>

    </body>

    </html>

    <?php
         }
         else header('Location:connexion.php');
    ?>




