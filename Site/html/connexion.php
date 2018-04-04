<?php
session_start();

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

if(isset($_POST['formconnexion'])) {

    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);

    if(!empty($mailconnect) AND !empty($mdpconnect)) {

        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
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

<?php

  include('./header.php');
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <title>GamingKeys - Connexion </title>

</head>
<body>

<div align="center">

    <h2>Connexion</h2>

    <br /> <br />

    <form method="POST" action="">

        <input type="email" name="mailconnect" placeholder="Mail" />

        <input type="password" name="mdpconnect" placeholder="Mot de passe" />

        <br /> <br />

        <input type="submit" name="formconnexion" value="Se connecter !" />

    </form>

    <?php

    if(isset($erreur)) {

        echo '<font color="red">'.$erreur."</font>";

    }
    ?>


</div>

    <?php include('footer.php'); ?>

</body>

</html>
