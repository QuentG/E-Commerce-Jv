<?php

//Recuperation de la bdd
try {
    $bdd = new PDO('mysql:host-localhost:8888;dbname=E-Commerce Jv;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

//Lister les utilisateurs.
$req = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
$req->execute(array('toto')); //Execute la requete

while ($donnees = $req->fetch()) {  //fetch = passer a la ligne suivante / parcourir le tableau
    echo $donnees['pseudo'].'</br>'; //Chercher / Affiche le pseudo

}

//Pour enregister un formulaire
if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('INSERT INTO utilisateurs (pseudo, password, mail) VALUES (?, ?, ?)');
    $rep->execute(array($_POST['pseudo'], $_POST['password'], $_POST['mail']));


}

//Connexion
if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('SELECT count(id) AND "nb", id FROM utilisateurs WHERE mail = ? AND password = ? ');
    $rep->execute(array($_POST['mail'], $_POST['password']));

    $result = $req->fetch(); //Assigne

    if ($result['nb'] == 1 ) { // SI nb = 1 donc je rentre dedans sinon non
        session_start();
        $_SESSION['user_id'] = $result['id'];
        

    }

}


?>

