<?php
session_start();

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}


$req = $bdd->prepare("SELECT * FROM jeux");
$req->execute();
$jeux = $req->fetchAll();


?>

<?php

include('./header.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GamingKeys</title>
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js%22%3E"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js%22%3E"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div>

    <!--Liste des jeux-->
    <div id="resp_1" class="row">
        <?php foreach ($jeux as $index => $jeu): ?>
            <div class="col-sm-3">
                <a href="http://localhost:8888/E-Commerce-Jv/Site/html/jeu.php?jeu=<?= $jeu['id']?>">
                <img class="img-responsive image" src="../img/<?= $jeu['id']?>.jpg"/>
                </a>
                <p><?= $jeu['nom']?></p>
            </div>
        <?php endforeach; ?>
    </div>


    <?php include('footer.php'); ?>


</body>


</html>
