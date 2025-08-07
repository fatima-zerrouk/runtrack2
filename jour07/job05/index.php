<?php

function occurrences($str, $char){
/* substr_count veut dire compte combien 
  de "o" y il y a dans $str*/ 
   return substr_count($str, $char);
}
echo occurrences("Bonjour", "o");
?>