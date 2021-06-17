<?php
    if(!empty($GET['lastName'])) {
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s']$/";
            if(preg_match($regex, $_GET['lastName'])) {
                $lastName = htmlspecialchars($_GET['lastName']);
            } else {
                $lastNameAlert = 'Attention ! Seuls les lettres et les accents sont autorisés pour le prénom !';
            }
    } else {
        $lastNameAlert = 'Attention ! Vous n\'avez pas fourni de prénom !';}
// Confirmation du regex pour la lastName

    if(!empty($GET['firstName'])) {
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s\']$/";
            if(preg_match($regex, $_GET['firstName'])) {
                $firstName = htmlspecialchars($_GET['firstName']);
            } else {
                $firstNameAlert = 'Attention ! Seuls les lettres et les accents sont autorisés pour le nom !';
            }
    } else {
        $firstNameAlert = 'Attention ! Vous n\'avez pas fourni de nom !';}

    // Confirmation du regex pour le firstName
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 PHP </title>
<body>
    <h1>Partie 7 : Les formulaires</h1>
    <h2>Exercice 4</h2>
    <p>Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.</p>
    <p>Bienvenue Monsieur !<?=$_POST['lastName'] .$_POST['firstName']; ?></p><!--Fonction POST pour récupérer les informations du formulaire-->
</body>
</html>