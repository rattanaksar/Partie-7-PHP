<?php // Je vérifie que le formulaire a été soumis
    $genderlist=['Monsieur'=>'Mr','Madame'=>'Mme'];//Tableau permettant d'incrémenter les données dans une liste
    if(isset($_REQUEST['register']))
    {
        $regex = '/^[A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç][A-Za-zÉÈËéèëÀÂÄàäâÎÏïîÔÖôöÙÛÜûüùÆŒÇç\-\s\']*$/';
        $formErrorList = [];//Liste les erreurs de saisie dans un tableau

        if(!empty($_REQUEST['lastname'])) {
                if(preg_match($regex, $_REQUEST['lastname'])) {
                    $lastname = htmlspecialchars($_REQUEST['lastname']);
                } else {
                    $formErrorList['lastname'] = 'Attention ! Seuls les lettres et les accents sont autorisés pour le nom !';
                }
        } else {
            $formErrorList['lastname'] = 'Attention ! Vous n\'avez pas fourni de nom !';
        }
    // Confirmation du regex pour la lastName
    
        if(!empty($_REQUEST['firstname'])) {
                if(preg_match($regex, $_REQUEST['firstname'])) {
                    $firstname = htmlspecialchars($_REQUEST['firstname']);
                } else {
                    $formErrorList['firstname'] = 'Attention ! Seuls les lettres et les accents sont autorisés pour le prénom !';
                }
        } else {
            $formErrorList['firstname'] = 'Attention ! Vous n\'avez pas fourni de prénom !';
        }
        if(!empty($_REQUEST['gender'])) {
            if(in_array($_REQUEST['gender'],$genderlist)){
                $gender=htmlspecialchars($_REQUEST['gender']);
            } else {
                $formErrorList['gender'] ='Vous n\'avez pas sélectionné un genre proposé';
            }
        }
        else {             
            $formErrorList['gender'] = 'Attention ! Vous n\'avez pas selectionné de genre !';
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        if(isset($_REQUEST['register'])&& empty($formErrorList))//Vérification des données envoyées et vérifier que le fichier d'erreur est vide
        { 
            ?><p>Bonjour <?= $gender ?> <?=$firstname?><?=$lastname?></p><?php
            }
        // si mes REQUEST n'existe pas j'affiche mon formulaire
        else 
        {
            ?>
            <form method="POST" action="">
                <select name="gender">
                    <option value="" disabled selected>Veuillez choisir votre civilité</option>
                    <?php 
                    foreach($genderlist as $text => $value){ // On fait un tour de boucle dans le tableau $genderlist
                    ?>
                    <option value="<?= $value ?>" <?= (isset($gender) && $gender == $value ) ? 'selected' : '' ?>><?= $text ?></option> <!-- vérification de la valeur et récupération de la valeur si elle est séletionnée-->
                    <?php
                    }
                    ?>
                </select>
                <?php 
                if(!empty($formErrorList['gender'])){
                    ?><p><small><?='<span style="color:#FF0000">'?><?= $formErrorList['gender'] ?></small></p>
                <?php
                }
                ?>
                <p><label for="firstname"> Prénom :</label> 
                <input type="text" value="<?= isset($firstname)? $firstname : '' ?>" name="firstname">
                <?php 
                if(!empty($formErrorList['firstname'])){
                    ?><p><small><?='<span style="color:#FF0000">'?><?= $formErrorList['firstname'] ?></small></p>
                <?php
                }
                ?></p>
                <label for ="lastname">Nom : </label> <input type="text" value="<?= isset($lastname) ? $lastname : '' ?>" name="lastname">
                <?php 
                if(!empty($formErrorList['lastname'])){
                    ?><p><small><?='<span style="color:#FF0000">'?><?= $formErrorList['lastname'] ?></small></p>
                <?php
                }
                ?>
                <p><input type="submit" value="s'enregistrer" name="register"></p>
            </form>
            <p>remplir les champs vides</p>
        <?php
        }
        ?>
    </div>
</body>
</html>