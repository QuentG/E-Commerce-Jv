<?php
//Verif Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}


//On vérifie que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["pseudo"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST ["mail"]) && isset($_POST ["mail2"])){

    //On vérifie que password / password2 et mail / mail2 soient identiques
    if($_POST["password"] == $_POST["password2"] && ($_POST["mail"] == $_POST["mail2"])){


        //On utilise alors notre fonction password_hash (Crypter le password)
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);


        //Puis on stock le résultat dans la base de données :
        $query = $pdo->prepare('INSERT INTO membres (username, mail, password) VALUES(:username, :mail, :password)');
        $query->bindParam(':pseudo', $_POST["pseudo"]);
        $query->bindParam(':password', $hash);
        $query->bindParam(':mail', $_POST["mail"]);
        $query->execute();

        header('Location: index.php');
        exit();
    }
} else {
    echo('Password ou E-Mail non identiques');
}
