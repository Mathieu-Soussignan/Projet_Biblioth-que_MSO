<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
        <h1 class="titrePage">Affichge livres par Titre</h1>
        <?php
        session_start();
        // if (!isset($_SESSION['role']) || $_SESSION['role'] != "1") {
        //     header("Location: index.html");
        //     exit;
        // } 
        ?>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>
    <?php
    if (isset($_POST['Titre'])) {

        // Connexion à la base de données
        $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
        $username = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $username, $password);
            $Titre = $_POST['Titre'];

            $stmt = $pdo->prepare("SELECT * FROM livre WHERE Titre = :Titre");
            $stmt->execute(['Titre' => $Titre]);
            $livres = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        $pdo = null;
    ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">ISBN</th>
                    <th scope="col" class="text-center">Titre</th>
                    <th scope="col" class="text-center">Thème</th>
                    <th scope="col" class="text-center">Nb_pages</th>
                    <th scope="col" class="text-center">Format</th>
                    <th scope="col" class="text-center">Nom auteur</th>
                    <th scope="col" class="text-center">Prénom auteur</th>
                    <th scope="col" class="text-center">Editeur</th>
                    <th scope="col" class="text-center">Année édition</th>
                    <th scope="col" class="text-center">Prix</th>
                    <th scope="col" class="text-center">Langue</th>
                </tr>
            </thead>
            <?php
            echo "<tbody>";
            foreach ($livres as $livre) {
                echo "<tr>";
                echo "<td>" . $livre->ISBN . "</td>";
                echo "<td>" . $livre->Titre . "</td>";
                echo "<td>" . $livre->Theme . "</td>";
                echo "<td>" . $livre->Nb_pages . "</td>";
                echo "<td>" . $livre->Format . "</td>";
                echo "<td>" . $livre->Nom_auteur . "</td>";
                echo "<td>" . $livre->Prenom_auteur . "</td>";
                echo "<td>" . $livre->Editeur . "</td>";
                echo "<td>" . $livre->Annee_edition . "</td>";
                echo "<td>" . $livre->Prix . "</td>";
                echo "<td>" . $livre->Langue . "</td>";
                echo "</tr>";
            }
            $pdo = null;
            echo "</tbody>";
            ?>
        </table>
    <?php } ?>
</body>

</html>