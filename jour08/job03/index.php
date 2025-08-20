
<?php
session_start();
?>
  
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
<!-- le nom du champ est "prenom" est accessible avec $_POST["prenom"] -->
    <br><label for="prenom">Prénom</label><br>
    <input type="text" name="prenom"><br><br>
<!-- bouton pour soumettre le formulaire -->
    <input type="submit" ><br><br>

    <button type="submit" name="reset">Réinitialiser</button>
</form>


<?php
    
// isset vérifier si le tableau "prenoms" existe déjà dans la session
     if (!isset($_SESSION["prenomS"])) {
// s'il n'existe pas, fait le vide "[]" pour pouvoir y stocker des prénoms
        $_SESSION["prenomS"] = [];
    }

// Pour ajouter un prénom

// si prenom POST existe et qu'il n'est pas vide 
    if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
// récupère la valeur de l'input "prenom"
        $prenom = ($_POST["prenom"]);
// ajoute ce prénom dans le tableau de session "prenomS"
        $_SESSION["prenomS"][] = $prenom;
    }

// Bouton reset qui réinitialise la liste

// si reset existe et que je clique sur le bouton reset
    if (isset($_POST["reset"])){
// réinitialise la liste en faisant encore un tableau vide
        $_SESSION["prenomS"] = [];
    }

// Pour afficher les prénoms

// si prenomS n'est pas vide 
    if (!empty($_SESSION["prenomS"])) {
// affiche  "Liste prénoms : 
        echo "Liste prénoms : ";
// la boucle foreach parcourt le tableau et affiche chaque prénom
        foreach ($_SESSION["prenomS"] as $liste) {
// ul et li c'est pour faire une liste html
            echo "<ul>" . "<li>" . $liste ."</li>" . "</ul>";
        }
    }
// sinon s'il n'y a aucun prénom affiche "Entrer votre prénom"
    else {
        echo "Entrer votre prénom";
    }
?>



</body>
</html>

