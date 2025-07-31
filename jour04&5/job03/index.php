<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form  method="POST">
    <label for="fname">Prénom</label><br>
    <input type="text" name="Prénom"><br><br>
    <label for="lname">Nom</label><br>
    <input type="text" name="Nom"><br><br>
    <input type="submit">
</form>

<?php
// vérifie que les champs "Prénom" et "Nom" ne sont pas vides
// affiche le résultat que si les deux champs sont remplis
if (!empty($_POST["Prénom"]) && !empty($_POST["Nom"])) {
// texte à afficher
    $nb = "Le nombre d’argument POST envoyé est : ";
// initialisation du compteurpour compter les POST
    $compteur = 0;
// boucle sur chaque élément contenu dans POST
    foreach ($_POST as $cle => $valeur){
// incrémente le compteur à chaque argument POST trouvé
        $compteur++;
}
// affiche le texte et le nombre d'arguments POST
    echo "<br>". $nb . $compteur;
}
?>



</body>
</html>
