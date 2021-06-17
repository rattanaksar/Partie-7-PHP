<?php
    if(!empty($_GET['lastName'])) { 
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s']$/";
        if (preg_match($regex, $_GET['lastName']));
            $lastName = htmlspecialchars ($_GET['lastName']);
    } 
    else {$lastNameAlert = 'Attention ! Seuls les lettres et les accents sont autorisés dans le nom';
    }
    else {$lastNameAlert = 'Vous n\'avez pas rentrer de nom !';
    }
//Contrôle et validation du nom
    if(!empty($_GET['firstName'])) { 
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s']$/";
        if (preg_match($regex, $_GET['firstName']));
            $firstName = htmlspecialchars ($_GET['firstName']);
    } else {$firstNameAlert = 'Attention ! Seuls les lettres et les accents sont autorisés dans le prénom';
    } else {$firstNameAlert = 'Vous n\'avez pas rentrer de prénom !';
    }
//Contrôle et validation du prénom
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 PHP </title>
<body>
    <h1>Partie 7 : Les formulaires</h1>
    <h2>Exercice 3</h2>
    <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
    <p><?= isset($lastName) ? $lastName : $lastNameAlert ?></p>
    <p><?= isset($firstName) ? $firstName : $firstNameAlert ?></p><!--Fonction GET pour récupérer les informations du formulaire-->
</body>
</html>