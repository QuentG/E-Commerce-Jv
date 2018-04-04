<?php

//Verif Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ecommerce_espace_membre', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}

if (isset($_POST))
{


    if(isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['password2']) AND isset($_POST['mail']) AND isset($_POST['mail2']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = htmlspecialchars($_POST['mail']);
        $mail2 = htmlspecialchars($_POST['mail2']);
        $mdp = sha1($_POST['password']);
        $mdp2 = sha1($_POST['password2']);


        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255)
        {
            if ($mail == $mail2)
            {
                if(filter_var($mail, FILTER_VALIDATE_EMAIL))
                {
                    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailexist = $reqmail->rowCount();
                    if ($mailexist == 0)
                    {
                        if ($mdp == $mdp2)
                        {
                            $insertmember = $bdd->prepare("INSERT INTO membres(pseudo, mail, password, avatar) VALUES (?,?,?,?)");
                            $insertmember->execute(array($pseudo, $mail, $mdp, "default.png"));
                            $_SESSION['comptecree'] = "Votre compte a bien été créé !";
                            header('Location: connexion.php');

                        }

                        else
                        {
                            $erreur = "Vos deux mots de passe doivent être identiques";
                        }

                    }
                    else
                    {
                        $erreur = "Adresse mail déjà utilisée";
                    }

                }

                else
                {
                    $erreur = "Votre adresse mail n'est pas valide";
                }


            }
            else
            {
                $erreur = "Vos deux adresses mail doivent être identiques";
            }
        }

        else
        {
            $erreur = "Votre nom ne doit pas dépasser 255 caractères";
        }


    }
    else {
        $erreur = "Tous les champs doivent être complétés";
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
    <link type="text/css" rel="stylesheet" href="../css/reset.css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <title>GamingKeys - Inscription</title>

</head>

<body>

<div id="inscription">

    <h2 class="ash">Inscription</h2>

    <form method="POST" action="">
        <label>Pseudo :</label>
        <input type="text" placeholder="Pseudo" id="pseudo" name="pseudo" required /> <br /> <br />

        <label>Mail :</label>
        <input type="email" placeholder="Email" id="email" name="mail" required /> <br /> <br />

        <label>Retapez l'email :</label>
        <input type="email" placeholder="Email" id="email2" name="mail2" required /> <br /> <br />

        <label>Mot de passe :</label>
        <input type="password" placeholder="Password" id="password" name="password" required /> <br /> <br />

        <label>Retapez le mot de passe :</label>
        <input type="password" placeholder="Password" id="password2" name="password2" required /> <br /> <br />

        <input type="submit" />

    </form>

    <p>Déjà membre ? <a href="connexion.php">Connectez-vous !</a></p>

  </div>

  <?php include('footer.php'); ?>

</body>

</html>
