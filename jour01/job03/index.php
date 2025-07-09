<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03 PHP</title>
</head>
<body>

<?php
/*4 variables  de types primitifs (boolean, 
entier, chaîne de caractères, nombre à virgule flottante)
*/
$boolean = true;
$integer = 42;
$string = "LaPlateforme";
$float = 3.14;

/*Un tableau des 4 variables du dessus qui contient 
des sous tableaux */
$variables = [
    ['type' => 'boolean', 'nom' => 'boolean', 'valeur' => $boolean ? 'true' : 'false'],
    ['type' => 'integer', 'nom' => 'integer', 'valeur' => $integer],
    ['type' => 'string',  'nom' => 'string',  'valeur' => $string],
    ['type' => 'float',   'nom' => 'float',   'valeur' => $float]
];

/*echo pour afficher le html
  border ajoute la bordure au tableau
  cellpadding ajoute de l'espace dans les cellules
  thead en tête du tableau
  th titres des colonnes type/nom/valeur
*/ 
echo "<table border='1' cellpadding='5'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";

/* tbody contient le corps du tableau */
echo "<tbody>";

/* foreach ($variables as $var) c'est une boucle 
  $variables c'est le tableau plus haut
  $var représente chaque élément du tableau*/
foreach ($variables as $var) {
    /* echo "<tr>" ouvre une ligne de tableau HTML, tr = table row
    ça vas afficher une nouvelle ligne à chaque tour de boucle */
    echo "<tr>";
    /* td  fais une cellule avec le type, nom et la valeur de la variable*/
    echo "<td>{$var['type']}</td>";
    echo "<td>{$var['nom']}</td>";
    echo "<td>{$var['valeur']}</td>";
    echo "</tr>";
}

/* /tbody fin de la boucle et /table fin du tableau */
echo "</tbody>";
echo "</table>";
?>

</body>
</html>
