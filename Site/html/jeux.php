<?php
session_start();

include ('./dbconnect.php');

$req = $bdd->prepare("SELECT * FROM jeux");
$req->execute();
$jeux = $req->fetchAll();


?>


<!DOCTYPE html>
<html lang="fr">
<head>

    <?php
        include ('./head.php');
    ?>
    <title> GamingKeys </title>

</head>

<body>


    <?php

    include('./header.php');
    ?>

<div>

    <!--Liste des jeux-->
    <div id="resp_1" class="row">

        <?php foreach ($jeux as $index => $jeu): ?>
            <div class="col-sm-3">
                <a href="http://localhost:8888/E-Commerce-Jv/Site/html/jeu.php?jeu=<?= $jeu['id']?>">
                <img class="img-responsive image" src="../img/<?= $jeu['id']?>.jpg"/>
                </a>
                <p class="nom_jeux"><?= $jeu['nom']?></p>
            </div>
        <?php endforeach; ?>

    </div>


    <?php include('footer.php'); ?>


</body>


</html>
