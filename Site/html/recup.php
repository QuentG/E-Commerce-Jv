<?php

//Recuperation de la bdd
try {
    $bdd = new PDO('mysql:host-localhost;dbname=labo_dev;charset=utf-8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

//Lister les utilisateurs.
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
$rep->execute(array('toto')); //Execute la requete

while ($donnees = $req->fetch()) {  //fetch = passer a la ligne suivante / parcourir le tableau
    echo $donnees['pseudo'].'</br>'; //Chercher le pseudo

}

?>


