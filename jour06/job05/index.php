<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- echo $styleChoisi; lie dynamiquement le fichier css choisi-->
    <title>PHP Job 05</title>
</head>
<body>

<!-- FORMULAIRE -->
<form method="post">
    <!-- "label" texte affiché au-dessus de la liste -->
    <label for="choix-style">Choisis un style</label><br><br>
    <!-- "select" liste déroulante avec les 3 styles -->
    <!-- "required" empêche d'envoyer le formulaire sans choisir -->
    <select name="style" id="choix-style" required>
        <option value="">Style</option>
        <!-- les options ont comme valeur les fichier css -->
         <!-- pour pré-sélectionner l'option déjà choisie, on vérifie avec PHP -->
          <option value="style1.css">Style1</option>
          <option value="style2.css">Style2</option>
          <option value="style3.css">Style3</option>
    </select>
    <!-- bouton pour envoyer le formulaire -->
    <input type="submit" value="Envoyer">
</form>

<?php
// vérifie si la variable $_POST['style'] existe et n'est pas vide donc si y a un style sélectionner
    if (!empty($_POST['style'])){
//  définit comme valeur les fichiers css au variables $style 
        $style1 = "style1.css";
        $style2 = "style2.css";
        $style3 = "style3.css";
// définit comme valeur le formulaire POST a la variable $styleSelect 
// récupère dans la variable $styleSelect la valeur envoyée par le formulaire POST
// cette valeur correspond au style choisi par l’utilisateur donc l’un des fichiers CSS
        $styleSelect = $_POST['style'];
// si la valeur sélectionnée est "style1.css"
    if ($styleSelect === $style1) {
// affiche une balise <link> qui va inclure style1.css dans la page html 
// ça permet d'appliquer le style contenu dans ce fichier
           echo "<link rel='stylesheet' href='" . $style1 . "'>";
// sinon si la valeur sélectionnée est "style2.css"
    }elseif ($styleSelect === $style2) {
// affiche la balise <link> vers style2.css
          echo "<link rel='stylesheet' href='" . $style2 . "'>";
// sinon si la valeur sélectionnée est "style3.css"
    }elseif ($styleSelect === $style3) {
// affiche la balise <link> vers style3.css
            echo "<link rel='stylesheet' href='" . $style3 . "'>";
         }

        } 


    ?>




</body>
</html>



 