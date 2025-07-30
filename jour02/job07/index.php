<?php

$hauteur = 5;
// initialisation a 0 donc 5 ligne 
for ($i = 0; $i < $hauteur; $i++){
//  espace à gauche pour centrer plus ça descend moins il y a d'espaces
/* $espace = 0 commence à 0 donc va afficher des espaces au début de chaque ligne
$espace < $hauteur - $i - 1 affiche de moins en moins d’espaces à chaque ligne qui descend
plus $i - augmente moins y a d'espaces 
augmente $espace de 1 à chaque tour donc affiche un espace à chaque fois*/
    for ($espace = 0; $espace < $hauteur - $i - 1; $espace++) {
// affiche espace insécable pour centrer
         echo "&nbsp; "; 
        }
//boucle étoiles:  
// à chaque ligne affiche un nombre impair d'étoiles
// 2 * $i + 1 donne le bon nombre d’étoiles à chaque ligne
// Exemple : ligne 0 = 1 étoile, ligne 1 =  3 étoiles, ligne 2 = 5 étoiles, etc
        for ($etoiles = 0; $etoiles < 2 * $i + 1; $etoiles++) {
             echo "*"; 
        }
//après une ligne retour a la ligne
        echo "<br>";


}


?>