<?php
// tableau contenant des nombres
$tableau = array (200, 204, 173, 98, 171, 404, 459);
// parcourt chaque élément du tableau avec la boucle foreach
foreach ($tableau as $est) {
// teste si le nombre est pair divisible par 2 sans reste
    if ($est % 2 === 0) {
// si c'est pair affiche le nombre + "est paire"
        echo $est . ' est paire' . '<br>';
    }
    else {
// sinon le nombre est impair donc affiche "est impaire"
        echo $est . ' est impaire'. '<br>';
    }

}

?>