<?php
// $i initialisation boucle qui commence à 0 jusqu'à 100
for ($i = 0; $i <= 100; $i++){
// si le nombre est égal à 42
     if ($i==42 ){
// si oui affiche la plateforme avec un retour à la ligne
         echo "La Plateforme_<br>";
         } 
// sinon $i inférieur ou égal à 20 affiche le en italique
     elseif ($i <= 20){
        echo "<i> $i</i> <br>";
    } 
//sinon $i supérieur ou égal à 25  $i inférieur ou égal à 50 affiche un soulignement
    elseif ($i>=25 && $i <=50) {
        echo "<u> $i</u> <br>";
      }   
    else {
// retour a la ligne  
             echo "$i <br>";
         }

}
?>


