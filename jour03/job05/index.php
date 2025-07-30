<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jours 3 job 5</title>
</head>
<body>

<?php
// chaîne de caractères à analyser
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
// dictionnaire de tableau contenant 2 listes voyelles et consonnes
$dic = [
// key voyelles et consonnes tableau contenant toutes les voyelles et les consonnes
    "voyelles" => ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"],
    "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z","B", "C", "D", "F", "G", "H", "j", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z"]
];
// initialisation des compteurs de voyelles et consonnes à 0
$NBvoyelles = 0 ;
$NBconsonnes = 0 ;
// boucle for pour parcourir chaque caractère de la chaîne $str
for ($i = 0; isset($str[$i]); $i++) {
// récupère le caractère à l'index $i donc 0 1 2 3 etc
    $caractere = $str[$i];
// if ce caractère est une voyelle présente dans le tableau $dic["voyelles"])
// in_array() pour vérifier la présence d’un caractère dans un tableau
    if (in_array($caractere, $dic["voyelles"])){
// incrémente le compteur de voyelles donc + 1 à chaque tour
        $NBvoyelles++;
    }
// sinon si le caractère est une consonne présente dans $dic["consonnes"])
    elseif (in_array($caractere, $dic["consonnes"])){
// incrémente le compteur de consonnes donc + 1 à chaque tour
        $NBconsonnes++;
    }
}

?>
<!-- tableau HTML -->
    <table>
    <thead>
        <tr>
<!-- titre des colonnes -->
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody> 
        <tr> 
<!-- affiche le nombre de voyelles et des consonnes comptées -->
            <td><?php echo $NBvoyelles; ?></td> 
            <td><?php echo $NBconsonnes; ?></td> 
        </tr> 
    </tbody>
    </table>
    

</body>
</html> 
