<!-- BDD -->
<?php 
// Connexion à la base de données
// Adresse et port du serveur MySQL 
$servername = "localhost:3307";  
// Nom d'utilisateur MySQL
$username = "root";
// Pas de mdp sur windows
$password = "";
// Nom de la bdd
$bddname = "jour09";

// Connexion à MySQL avec mysqli
$connexion = new mysqli($servername, $username, $password, $bddname);
// c'est pour les problèmes d'accents 
$connexion->set_charset("utf8");

// Requête SQL pour récupérer les données
$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salles;";



// $connexion->query($sql) exécute la requête SQL sur la base de données
// $result contient le résultat de la requête, donc va afficher les donnée des "etudiants"
$result = $connexion->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 11</title>

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #000000ff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Capacité moyenne</th>
                </tr>
            </thead>
        
            <tbody>
                <?php 
// si la requête a fonctionné et qu’il y a au moins un étudiant dans la bdd
// $result contient le résultat de la requête SQL (SELECT * FROM etudiants)
// $result->num_rows donne le nombre de lignes retournées par la requête
                if ($result && $result->num_rows > 0){
// while boucle sur chaque ligne du résultat
// fetch_assoc() prend une ligne du résultat et la transforme en tableau avec le nom des colonnes comme clés
// la boucle while continue tant qu’il y a des lignes à lire dans la bdd
                    while ($data = $result->fetch_assoc()): 
                ?>
                <tr>
                    <!-- affiche les données -->
                    <td><?php echo($data["capacite_moyenne"]); ?></td>
                </tr>
                <?php 
                // fin de la boucle
                    endwhile; 
                 };
                ?>
            </tbody>
        </table>
    </section>

</body>
</html>


