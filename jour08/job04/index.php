<?php
// si le formulaire de connexion existe est quil n'est pas vide 
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
// assigne ($_POST['prenom']); a la variable $prenom
    $prenom = ($_POST['prenom']);
// enregistre le prénom dans un cookie qui dure 30 jours
    setcookie("prenom", $prenom, time() + 60*60*24*30, "/");
//  met aussi dans $_COOKIE pour l'avoir dispo immédiatement
    $_COOKIE["prenom"] = $prenom;
}

// si je clique sur le bouton déconnexion 
if (isset($_POST['deco'])) {
// supprime le cookie en mettant une date d'expiration dans le passé
    setcookie("prenom", "", time() - 3600, "/");
/* unset permet d’effacer la valeur côté PHP tout de suite 
sinon il resterait jusqu’au prochain rechargement */
    unset($_COOKIE["prenom"]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04</title>
</head>
<body>

<?php
// 
// si le cookie "prenom" existe et que l'utilisateur est "connecté"
if (isset($_COOKIE["prenom"]) && !empty($_COOKIE["prenom"])) {
// affiche bonjour est le prénom
    echo "Bonjour " . $_COOKIE["prenom"];
    ?>

<!-- LES formulaires sont après if et else parce que c'est pour qu'il y en ait 
 seulement 1 à la fois qui s'affiche. Si je les avais mis les 2 formulaires 
 sans if et else il s'afficherait tous les 2. -->

<!-- Formulaire de déconnexion-->
    <form method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
    <?php
} else {
// sinon s'il n'y a pas de cookie affiche le formulaire de connexion ?>
<!-- Formulaire de connexion -->
    <form method="post">
        <label for="prenom">Prénom </label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit" name="connexion">Connexion</button>
    </form>
    <?php
}
?>

</body>
</html>
