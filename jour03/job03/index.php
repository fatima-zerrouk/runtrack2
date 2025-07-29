<?php 
// $str chaîne à parcourir 
$str = "I'm sorry Dave I'm afraid I can't do that"; 
// tableau des voyelles  
$tableau = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"]; 
// $i initialisation à 0 pour parcourir la chaîne  
$i = 0; 

// boucle while continue tant qu’il y a un caractère à la position $i
while (isset($str[$i])) { 
// récupère le caractère actuel de la chaîne
    $lettre = $str[$i]; 
// initialisation pour parcourir le tableau des voyelles
    $voyelles = 0; 

/* 2eme boucle while parcourt le tableau des voyelles 
pour voir si le caractère actuel correspond à l’une des voyelles. 
Si oui affiche la lettre avec echo. Puis break pour 
quitter la boucle et ne continue pas à chercher inutilement.*/
// boucle qui vérifie si la lettre est dans le tableau des voyelles
    while (isset($tableau[$voyelles])) { 
// if la lettre actuelle est égale à la voyelle dans le tableau
        if ($lettre == $tableau[$voyelles]) { 
// alors affiche
            echo $lettre; 
// break sort de la boucle s'il y a une voyelle 
            break; 
        } 
// sinon passe à la voyelle suivante dans le tableau
        $voyelles++; 
// qunad la lettre et traitée passe au caractère suivant dans la chaîne
    } $i++;
} 
?>