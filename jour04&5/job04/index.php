<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    table{
        border-collapse: collapse
    }
    td, th{
        border: 1px solid black;
        padding: 10px;
    }
</style>

<form  method="post">
    <label for="fname">Prénom</label><br>
    <input type="text" name="Prénom"><br><br>
    <label for="lname">Nom</label><br>
    <input type="text" name="Nom"><br><br>
    <input type="submit">
</form>

<?php
// vérifie que les deux champs ont bien été remplis 
if (!empty($_POST["Prénom"]) && !empty($_POST["Nom"])) {
// if oui commence l'affichage du tableau  
        echo "<br>" . "<table>"; 
// première ligne du tableau les titres des colonnes
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
// parcourt chaque clé et valeur dans $_POST donc prénom et nom
    foreach ($_POST as $argument => $valeur) { 
// commence une ligne du tableau
        echo "<tr>"; 
// colonne avec le nom du champ donc Prénom et Nom
        echo "<td>$argument</td>"; 
// colonne avec la valeur saisie exemple : Stephane Dupont
        echo "<td>$valeur</td>"; 
// fin de tr
        echo "</tr>"; } 
// fin du tableau
        echo "</table>";
}
?>

</body>
</html>
