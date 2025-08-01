<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- formulaire html qui envoie les données en méthode POST -->
<form  method="post">
<!-- label et champ texte pour le prénom d'utilisateur --> 
<!-- le nom du champ est "username" donc accessible avec $_POST["username"] -->
    <label for="nom">Prénom</label><br>
    <input type="text" name="username"><br><br>
    <label for="mdp">Mot de passe</label><br>
    <input type="password" name="password"><br><br>
<!-- bouton pour soumettre le formulaire -->
    <input type="submit">
</form>

<?php
// if condition vérifie si les champs "username" et "password" ont été envoyés 
// isset() pour s'assurer que ces clés existent bien dans le tableau $_POST
if (isset($_POST["username"]) && isset($_POST["password"])) {
// vérifie si les valeurs envoyées correspondent à "John" et "Rambo" 
// == sert à COMPARER et pas à affecter une valeur
    if ( $_POST["username"] == "John" && $_POST["password"]== "Rambo"){
// if les deux valeurs sont bonnes affiche le message suivant
        echo "<br>" . "C’est pas ma guerre";
    }
    else {
// else un des deux champs est incorrect affiche un autre message
        echo "<br>" . "Votre pire cauchemar";
    }

}
?>

</body>
</html>