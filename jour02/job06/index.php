<?php
//variable avec la valeur 20 pour la largeur du rectangle
$largeur = 20;

//variable pour dire la hauteur du rectangle 
$hauteur = 10;

// boucle qui va faire chaque ligne du rectangle de 1 jusqu'à la hauteur
for ($verticale = 1; $verticale <= $hauteur; $verticale++) {

// pour chaque ligne fais une autre boucle qui met les étoiles de 1 jusqu'à la largeur
    for ($horizontale = 1; $horizontale <= $largeur; $horizontale++) {

// affiche une étoile sans aller à la ligne
        echo "*";
    }

// après avoir fini une ligne d’étoiles retour à la ligne
    echo "<br>";
}
?>
    