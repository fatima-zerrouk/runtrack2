<?php
// $i initialisation boucle qui commence à 0 jusqu'à 100
for ($i = 1; $i <= 100; $i++){
// si le nombre est multiple de 3 et de 5 affiche fizzbuzz
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br>";
    }
// si c'est juste un multiple de 3 affiche fizz 
    elseif ($i % 3 == 0){
        echo"Fizz <br>";
    }
// si c'est juste un multiple de 5 affiche buzz
    elseif($i % 5 == 0){
        echo "Buzz <br>";
    }
// sinon affiche le nombre normal avec retour a la ligne

    else{
        echo "$i <br>";
    }

}
?>
