<!-- avec fonction strrev -->
<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
echo strrev($str) . "<br>" . "<br>";
?>

<!-- sans fonction strrev -->
<?php
// chaîne de caractères à inverser
$str = "Les choses que l'on possède finissent par nous posséder.";
// "strlen" donne la longueur totale de la chaîne
// "strlen($str) - 1" donne l’index du dernier caractère parce que l’index commence à 0
// "for ($i = ...; $i >= 0; $i--)" boucle qui commence à la fin et va jusqu’au début de la chaîne
for ($i =(strlen($str) - 1); $i>=0 ; $i--) { 
// affiche chaque caractère un par un en partant du dernier jusqu’au premier avec la configuration du dessus
    echo $str[$i];
}

?>