<?php
// il y a 44 caractères
$str = "Dans l'espace, personne ne vous entend crier";
// initialisation variable pour compter les caractères
$texte = 0;
// boucle for pour parcourir chaque caractère de la chaîne $str
/* isset continue tant que isset($str[$i]) est vrai une fois 
arrivé à la fin de la chaine, donc 44 ISSET devint null  */
for ($i = 0; isset($str[$i]); $i++) {
/* à chaque tour de boucle ajoute 1, donc à la fin de la 
boucle, $texte contient le nombre total de caractères 
dans $str */
    $texte++;
}
// affiche le nombre total de caractères
echo $texte;

?>