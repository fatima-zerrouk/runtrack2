<?php
// $exclue Est une variable qui contient un tableau de nombres à exclure
$exclue = [26, 37, 88, 1111];

/* $i = 0; La boucle commence à 0
$i <= 1337; Elle continue tant que $i est inférieur ou égal à 1337
$i++ À chaque tour, $i augmente de 1 */
for ($i = 0; $i <= 1337; $i++){


/* "if" "si" in_array($i, $exclus) signifie : 
Est-ce que la valeur $i est présente dans le tableau $exclus 
"!" "NON", donc on inverse la condition. Donc Si $i n’est PAS dans la liste $exclus, alors on exécute le code qui suit*/
// si le nombre n'est pas exclue affiche 
     if (!in_array($i, $exclue)){

// "echo" affiche la valeur de "$i" avec retour à la ligne "<br/>"
        echo $i . "<br/>";
}
}

?>