<!-- J'ai fais comme ça le problème c'est que si je change
 l'ordre des lettres l'ordre des chiffres ne changera pas -->

<?php
// variable qui a pour valeur une string
$str = "Hello la plateforme";
// leetSpeakF fonction qui prend un argument $str 
// le but de cette fonction est de convertir une phrase en leet speak
function leetSpeakF($str){
/*la fonction strtr() effectue une substitution caractère par caractère dans une chaîne 
  elle a 3 paramètres STRING FORM TO
  1 STRING la chaîne à transformer "Hello la plateforme" 
  2 FROM les caractères à rechercher "abeglstABEGLST" 
  3 TO l
  es caractères de remplacement "48361574836157" 
  chaque lettre trouvée dans $str sera remplacée par 
  le caractère à la même position dans la chaîne de remplacement
*/ 
    return strtr($str, "abeglstABEGLST", "48361574836157" );
}
// echo appelle la fonction leetSpeakF
echo leetSpeakF($str);
?>




<!-- Alors qu'ici comme les lettres son égal aux chiffres peu importe 
 le sens ça marchera donc ça remplacera les lettres par les chiffres-->
<?php
// fonction nommée "leetSpeak" qui prend une variable $str en paramètre
function leetSpeak($str){

// tableau nommé $leetSpeak 
// chaque élément du tableau représente une lettre majuscule ou minuscule
// en tant que clé et sa version chiffre en tant que valeur
  $leetSpeak = [
    "A" => "4", "a" => "4",
    "B" => "8", "b" => "8",
    "E" => "3", "e" => "3",
    "G" => "6", "g" => "6",
    "L" => "1", "l" => "1",
    "S" => "5", "s" => "5",
    "T" => "7", "t" => "7"
  ];
// la fonction retourne renvoie le résultat de la fonction strtr() 
// strtr() prend 2 arguments 
// 1 le premier argument est la chaîne à transformer ($str 
// 2 le deuxième argument est le tableau
// strtr() va automatiquement remplacer chaque lettre trouvée dans la clé du tableau par la valeur associée
     return strtr($str,$leetSpeak);
}
// appel de la fonction leetSpeak() en lui passant le texte "Hello la plateforme"
// le résultat retourné par la fonction est affiché à l’écran avec echo
echo leetSpeak("Hello la plateforme");
?>