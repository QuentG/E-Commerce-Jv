<?php
session_start();


include ('./dbconnect.php');


if(isset($_POST['formconnexion'])) {

    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);

    if(!empty($mailconnect) AND !empty($mdpconnect)) {

        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND password = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();

        if($userexist == 1) {

            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];

            header("Location: profil.php?id=".$_SESSION['id']);

        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }

    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>


<!DOCTYPE html>
<html>
<head>

        <?php

        include ('./head.php');

        ?>

    <title> GamingKeys - Connexion </title>

</head>

<body>

    <?php

    include('./header.php');
    ?>

<div align="center" id="tous_connection">

    <h2 id="co">Connexion</h2>


    <form method="POST" action="">
        <div>
            <div>
                <input type="email" name="mailconnect" placeholder="Mail" class="pwd"/>
            </div>
            <div>
                <input type="password" name="mdpconnect" placeholder="Mot de passe"  class="pwd"/>
            </div>
        </div>
        <div>
            <input type="submit" name="formconnexion" value="Se connecter !" class="btns"/>
        </div>
    </form>

    <?php

    if(isset($erreur)) {

        echo '<p id="erreur">'.$erreur."</p>";

    }
    ?>


</div>

<?php include('footer.php'); ?>

</body>

</html>
