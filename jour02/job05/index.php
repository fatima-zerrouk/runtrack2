<?php
// défini la limite jusqu'où on veut chercher les nombres premiers
$N = 1000;
// déclaration de la fonction isPrime qui vérifie si un nombre est premier
function isPrime($n) {
// si le nombre est 0 ou 1 il est pas premier
    if ($n == 1 || $n == 0) {
// renvoie faux
        return false;
    }
// teste tous les diviseurs possibles de 2 à racine carrée de n / A REVOIR MAL COMPRIS
    for ($i = 2; $i <= sqrt($n); $i++) {
// si n est divisible par i ce n'est pas un nombre premier
        if ($n % $i == 0) {
 //un diviseur trouvé pas premier
            return false;
        }
    }
// si aucun diviseur trouvé le nombre est premier
    return true;
}
// boucle de 1 à 1000 pour tester tous les nombres
for ($i = 1; $i <= $N; $i++) {
// utilise la fonction isPrime pour vérifier si le nombre est premier
    if (isPrime($i)) {
// si le nombre est premier affiche avec un retour à la ligne
        echo $i . " <br>";
    }
}
?>