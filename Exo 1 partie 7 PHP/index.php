<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 7 PHP </title>
<body>
    <h1>Partie 7 : Les formulaires</h1>
    <h2>Exercice 1</h2>
    <p>Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.</p>
    <form action="user.php" method="get"> <!-- Formulaire de saisie -->
        <label for="lastName">Nom:</label> <input type="text" name="lastName">
        <label for="firstName">Prénom :</label><input type="text" name="firstName">
        <input type="submit" value="Enregistrer du formulaire"><!--Fin du formulaire-->
    </form>
</body>
</html>