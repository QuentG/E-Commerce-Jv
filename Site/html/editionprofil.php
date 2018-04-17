<?php
session_start();

include ('./dbconnect.php');

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

      $newmdp1 = sha1($_POST['newmdp1']);
      $newmdp2 = sha1($_POST['newmdp2']);

      if ($newmdp1 == $newmdp2)
      {
        $insertmdp = $bdd->prepare("UPDATE membres SET password = ? WHERE id = ?");
        $insertmdp->execute(array($newmdp1, $_SESSION['id']));

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


    <!DOCTYPE html>
    <html>
    <head>

        <?php

        include ('./head.php');

        ?>

        <title>GamingKeys - Edition Du Profil</title>

    </head>

    <body>

    <?php

    include('./header.php');

    ?>

    <div align="center">

        <h2> Edition de mon profil</h2>

        <div align="center">

        <form method="post" action="" enctype="multipart/form-data">

            <div>
                <input type="text" name="newpseudo" placeholder="Pseudo" class="pwd" value="<?= $user['pseudo'];?>"/>
            </div>

            <div>
                <input type="text" name="newmail" placeholder="Mail" class="pwd" value="<?= $user['mail'];?>"/>
            </div>

            <div>
                <input type="password" name="newmdp1" class="pwd" placeholder="Mot de passe"/>
            </div>

            <div>
                 <input type="password" name="newmdp2" class="pwd" placeholder="Confirmation du mot de passe"/>
            </div>

            <div>
                <input id="file_av" type="file" name="avatar"/>
            </div>

            <div>
                <input class="btns" type="submit" value="Mettre à jour"/>
            </div>

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




