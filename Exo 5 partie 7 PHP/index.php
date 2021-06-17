<?php
    if(!empty($POST['lastName'])) {
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s']$/";
            if(preg_match($regex, $_POST['lastName'])) {
                $lastName = htmlspecialchars($_POST['lastName']);
            } else {
                $lastNameAlert = 'Attention ! Seuls les lettres et les accents sont autorisés pour le prénom !';
            }
    } else {
        $lastNameAlert = 'Attention ! Vous n\'avez pas fourni de prénom !';}
// Confirmation du regex pour la lastName

    if(!empty($POST['firstName'])) {
        $regex = "/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç-\s']$/";
            if(preg_match($regex, $_GET['firstName'])) {
                $firstName = htmlspecialchars($_POST['firstName']);
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
    <h2>Exercice 5</h2>
    <p>Créer un formulaire sur la page index.php avec :</p>
    <ul>
        <li>Une liste déroulante pour la civilité (Mr ou Mme)</li>
        <li>Un champ texte pour le nom</li>
        <li>Un champ texte pour le prénom</li>
    </ul>   
    <p>Ce formulaire doit rediriger vers la page index.php.Vous avez le choix de la méthode.</p>
    <form action="index.php" method="GET">> <!-- Début du formulaire de saisie -->
        <label for="title">Civilité</label>
        <select name="gender" id="gender">
            <option value="Madame">Madame</option>
            <option value="Monsieur">Monsieur</option>
        </select>
        <label for ="lastName"> Nom : </label><input type="text" name="lastName">
        <label for ="firstName"> Prénom : </label><input type="text" name="firstName">
        <input type='submit'value="Enregistrer votre formulaire"><!--Fin du formulaire-->
    </form>
    <p><?=$POST['gender'] .$POST['lastName'] .$_POST['firstName']; ?></p>
</body>
</html>