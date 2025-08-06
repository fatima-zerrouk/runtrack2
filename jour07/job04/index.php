<?php
// fonction personnalisée qui s'appelle "calcule()" 
// avec le paramètre $a, $operation, $b entre parenthèses 
function calcule($a, $operation, $b){

// la fonction a pour instruction d'afficher de calculer
// si $operation est + return 20 + 10 donc 30
    if ($operation === "+") {
        return $a + $b;
    }
// sinon si $operation est - returne 20 - 10 donc 10 ect
     elseif ($operation === "-") {
        return $a - $b;
    }
     elseif ($operation === "*") {
        return $a * $b;
    }
     elseif ($operation === "/") {
        return $a / $b;
    }
     elseif ($operation === "%") {
        return $a % $b;
    }
    
}
// affiche le résultat de la fonction "calcule" 20 + 10
echo calcule(20, "+", 10);

?>