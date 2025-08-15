<?php 
/* la fonction setcookie() il faut l’appeler avant tout autre
code parce que les cookies sont envoyés dans les en-têtes HTTP */
setcookie("nbvisites", 0 );

// isset vérifie que $_POST est définie 
if (isset($_POST["reset"])){
// donc si je clique sur reset met le compteur à 0
  $_COOKIE["nbvisites"] = 0;
}
// sinon incrémente à chaque fois que je relance la page 
  else {
// donne la valeur de $_COOKIE["nbvisites"] a $test
    $test = $_COOKIE["nbvisites"];
// incrémente
    $test++;
// setcookie("nbvisites", $test); c'est pour modifier le cookie 
// donc pour ajouter l'incrémentation
    setcookie("nbvisites", $test);
  }
// affiche la phrase et le compteur
   echo "Nombre de visite : ". $_COOKIE["nbvisites"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP jour 8 job 1</title>
</head>
<body>
  <form method="post">
    <button type="submit" name="reset">Reset</button>
  </form>
</body>
</html>