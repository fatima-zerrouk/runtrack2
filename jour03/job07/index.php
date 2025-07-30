<?php
// $str variable avec la chaîne donnée
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
// $stock initialisation d'une chaîne vide pour stocker le résultat final
$stock = "";
// boucle qui parcourt chaque caractère de la chaîne $str 
// "isset($str[$i])" ne dépasse pas la longueur de la chaîne
for ($i = 0; isset($str[$i]) ; $i++) { 
// vérifie s'il y a un caractère à la position suivante ($i + 1)
    if (isset($str[$i + 1])){
// if oui ajoute ce caractère suivant à la chaîne $stock
        $stock .= $str [$i + 1];
// else c'est le dernier caractère ajoute le premier caractère de $str
    } else {
        $stock .= $str[0];
    }
 }
 // affiche la chaîne modifiée complète quand la boucle terminée
     echo $stock;

?>