<?php
// $jour c'est une variable qui est vide pour que ça soit false parce que si c'es vide c'est 0 donc false
// pour que la variable soit true il faut mettre une valeur et donc c'est 1 
$jour = "";
// fonction personnalisé qui s'appelle "bonjour()" 
// avec avec un l'argument $jour entre parenthèses 
function bonjour($jour){
// si  $jour vaut true la fonction doit afficher  Bonjour
    if ($jour == true){
        echo "Bonjour";

// si  $jour vaut false la fonction doit afficher  Bonsoir
   } if ($jour == false) {
        echo "Bonsoir";
    }
}
// affiche la fonction
bonjour($jour);

?>



