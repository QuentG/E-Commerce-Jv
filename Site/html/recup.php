<?php
//Recup de la BDD
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=E-Commerce Jv;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


if(isset($_POST['forminscription'])) {
    // Protection
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    // Cryptage du MDP
    $mdp = password_hash($_POST['pass1'], PASSWORD_DEFAULT);
    $mdp2 = password_hash($_POST['pass2'], PASSWORD_DEFAULT);

    // Verification : Champs tous bien remplis
    if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pass1']) AND !empty($_POST['pass2'])) {
        // Condition pseudo
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 100) {
            // Condition mail
            if($mail == $mail2) {
                // Verification mail
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $reqmail = $bdd->prepare(" SELECT * FROM Membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if($mailexist == 0) {
                        // Verification MDP
                        if($mdp == $mdp2) {
                            $insertmbr = $bdd->prepare("INSERT INTO Membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
                            $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";

                            // En cas d'erreur
                        } else {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 100 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>



<!--

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

?> -->


<!-- //Recuperation de la bdd
try {
    $bdd = new PDO('mysql:host-localhost:8888;dbname=E-Commerce Jv;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

//Cryptage du MDP
    $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

//Insertion
    $req = $bdd->prepare('INSERT INTO Membres(pseudo, pass, email, date_inscription)
       VALUES(:pseudo, :pass, :email, CURDATE())');

    $req->execute(array(
        'pseudo' => $pseudo,
        'pass' => $pass_hache,
        'email' => $email)); -->


