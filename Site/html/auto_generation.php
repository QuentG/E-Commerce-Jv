<?php
session_start();

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

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

<?php

  include('./header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <title>GamingKeys</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>


    <!--Auto_generation des jeux-->

    <div id="resp_1" class="row">
        <div class="col-sm-6">
            <img class="img-responsive image" src="../img/pc/aventure/<?= $jeu['id']?>.jpg"/>
            <img class="img-responsive image" src="../img/pc/action/<?= $jeu['id']?>.jpg"/>
            <img class="img-responsive image" src="../img/pc/combat/<?= $jeu['id']?>.jpg"/>
            <img class="img-responsive image" src="../img/pc/sport/<?= $jeu['id']?>.jpg"/>
        </div>
    </div>


    <?php include('footer.php'); ?>


</body>


</html>
