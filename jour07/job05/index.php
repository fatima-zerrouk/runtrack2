<?php
// fonction personnalisée qui s'appelle "occurrences()" 
// avec le paramètre $str, $char
function occurrences($str, $char){
/* substr_count veut dire compte combien 
  de "o" y il y a dans $str*/ 
   return substr_count($str, $char);
}
// echo de la fonction qui va afficher le nombre de o donc 2
echo occurrences("Bonjour", "o");
?>