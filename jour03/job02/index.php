<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

//boucle for pour parcourir la chaîne
//commence à 0 le premier caractère
// strlen($str) récupère la longueur de la chaîne de caractères en comptant 
//tant que $i est plus petit que $str augmente $i de 2 à chaque tour pour sauter un caractère
for ($i = 0; $i < strlen($str); $i += 2) {
    
    echo $str[$i];
}
?>