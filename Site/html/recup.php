<?php

//Recuperation de la bdd
try {
    $bdd = new PDO('mysql:host-localhost:8888;dbname=labo_dev;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

//Lister les utilisateurs.
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
$rep->execute(array('toto')); //Execute la requete

while ($donnees = $req->fetch()) {  //fetch = passer a la ligne suivante / parcourir le tableau
    echo $donnees['pseudo'].'</br>'; //Chercher le pseudo

}

//Pour enregister un formulaire
if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('INSERT INTO utilisateurs (pseudo, password, mail) VALUES (?, ?, ?)');
    $rep->execute(array($_POST['pseudo'], $_POST['password'], $_POST['mail']));


}


?>