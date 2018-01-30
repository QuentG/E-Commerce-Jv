<?php
//Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage() );
}

//Verification que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["username"]) && isset($_POST["password"])){

    //Nous allons demander le hash pour cet utilisateur à notre base de données :
    $query = $pdo->prepare('SELECT password FROM membres WHERE username = :username');
    $query->bindParam(':username', $_POST["username"]);
    $query->execute();
    $result = $query->fetch();
    $hash = $result[0];

    //Verification du MDP
    $correctPassword = password_verify($_POST["password"], $hash);

    if($correctPassword){

        //Si oui nous accueillons l'utilisateur identifié
        echo "Bienvenue ".$_POST["username"];
    }else{
        //Sinon nous signalons une erreur d'identifiant ou de mot de passe
        echo "login/password incorrect";
    }
}
?>
