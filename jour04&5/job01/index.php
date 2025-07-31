<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form  method="get">
    <label for="fname">Prénom</label><br>
    <input type="text" name="Prénom"><br><br>
    <label for="lname">Nom</label><br>
    <input type="text" name="Nom"><br><br>
    <input type="submit">
</form>

<?php
// vérifie que les champs "Prénom" et "Nom" ne sont pas vides
// affiche le résultat que si les deux champs sont remplis
if (!empty($_GET["Prénom"]) && !empty($_GET["Nom"])) {
// texte à afficher
    $nb = "Le nombre d’argument GET envoyé est : ";
// initialisation du compteurpour compter les $_GET
    $compteur = 0;
// boucle sur chaque élément contenu dans $_GET
    foreach ($_GET as $cle => $valeur){
// incrémente le compteur à chaque argument $_GET trouvé
        $compteur++;
}
// affiche le texte et le nombre d'arguments $_GET
    echo "<br>". $nb . $compteur;
}
?>



</body>
</html>
