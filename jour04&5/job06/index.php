<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Pourquoi POST et pas GET pour le formulaire
1. GET ajoute les données dans l'url c'est pas idéal pour les données sensible. 
2. POST Les données du formulaire n'apparaissent pas dans l'URL. 
   En conséquence, il n'est pas possible de récupérer directement les données 
   en JavaScript , il faut ajouter du code PHP dans la page 
   exemple : 
 $couleur = $_POST['couleur'];
 $forme = $_POST['forme'];
-->

<!-- formulaire html qui envoie les données en méthode GET -->
<form  method="get">
<!-- label et champ texte pour le prénom d'utilisateur --> 
<!-- le nom du champ est "username" donc accessible avec $_POST["username"] -->
    <label for="nom">Nombre</label><br>
    <input type="text" name="nombre"><br><br>
    <input type="submit">
</form>
 
<?php 
// vérifie que le champ "nombre" a été envoyé avec la méthode GET 
if (isset($_GET["nombre"])) { 

// récupère la valeur envoyée par l'utilisateur donc le nombre
    $nombre = $_GET["nombre"]; 

// si la valeur entrée est un nombre 
    if (is_numeric($nombre)) { 

//  si le nombre est pair s’il est divisible par 2 sans reste -
        if ($nombre % 2 == 0) { 

// affiche "Nombre pair" si le résultat du modulo est 0 
            echo "Nombre pair"; } 

// sinon affiche "Nombre impair"
            else { 
                echo "Nombre impair"; } } 
} 
?>

</body>
</html>