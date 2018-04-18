<?php
session_start();


include ('./dbconnect.php');


// SELECT JEUX PAR L'ID

if(isset($_GET['jeu'])) {

    $jeu = htmlspecialchars($_GET['jeu']);

    if(!empty($jeu)) {

        $req = $bdd->prepare("SELECT * FROM jeux WHERE id = ?");
        $req->execute(array($jeu));
        $exist = $req->rowCount();

        if($exist == 1) {

            $jeu = $req->fetch();
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>

    <?php

    include('./head.php');
    ?>

    <title> GamingKeys</title>

</head>

<body>


    <?php

    include('./header.php');
    ?>

    <!--Affichage des jeux-->

        <div>
            <img class="img_jeu" src="../img/<?= $jeu['id']?>.jpg"/>
        </div>
        <div class="text_jeu">
            <h1 class="nom_jeu"><?= $jeu['nom']?></h1>
            <p class="desc_jeu"><?= $jeu['description']?></p>
            <p class="prix_jeu"> Prix : <?= $jeu['prix']?> €</p>
            <a href="#" class="myButton">Acheter !</a>
        </div>


    <?php include('footer.php'); ?>


</body>


</html>
