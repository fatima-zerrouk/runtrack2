  <?php
    session_start();
// si la session existe ou pas et si elle n'est pas null je l'utilise
// sinon utilise la valeur définie donc 0
    $_SESSION['nbvisites'] ?? 0;
    
// si je clique sur le bouton "reset POST" met le conteur à 0 
    if (isset($_POST["reset"])) {
        $_SESSION['nbvisites'] = 0;
    }

// sinon incrémente le nombre de fois où la page a été visiter 
    else {
        $_SESSION['nbvisites']++;
    }
// affiche la phrase et le compteur
   echo "Nombre de visite : ". $_SESSION['nbvisites'];
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

