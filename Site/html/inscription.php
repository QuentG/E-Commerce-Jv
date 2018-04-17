<?php

//Verif Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include ('./dbconnect.php');

if (isset($_POST['forminscription']))
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


<div align="center">
    <h2 id="ins">Inscription</h2>

    <form method="POST" action="">

        <div>
            <div>
                <input type="text" placeholder="Votre Pseudo" class="inscription" name="pseudo" value="<?php if (isset($pseudo)) { echo  $pseudo;  } ?>"/>
            </div>
            <div>
                <input type="email" placeholder="Votre email" class="inscription" name="mail" value="<?php if (isset($mail)) { echo  $mail;  } ?>"/>
            </div>
            <div>
                <input type="email" placeholder="Confirmation de l'email" class="inscription" name="mail2" value="<?php if (isset($mail2)) { echo  $mail2;  } ?>"/>
            </div>
            <div>
                <input type="password" placeholder="Votre mot de passe" class="inscription" name="password"/>
            </div>
            <div>
                <input type="password" placeholder="Confirmation de votre mot de passe" class="inscription" name="password2"/>
            </div>
            <div>
                <input type="submit" name="forminscription" value="S'inscrire" id="btn_inscription"/>
            </div>
        </div>

        </table>
obsolure
    </form>


    <p id="membre">Déjà membre ? <a href="connexion.php">Connectez-vous !</a></p>


    <?php
    if (isset($erreur)) {
        echo '<span style="color:red">'.$erreur.'</span>';
    }

    ?>

</div>

<?php include('footer.php'); ?>

</body>

</html>
