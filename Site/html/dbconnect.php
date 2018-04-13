<?php

//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', '');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}


?>