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
        <h1 class="titrePage">Affichage livres par Auteur</h1>
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
    if (isset($_POST['Nom_auteur'])) {

        $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $Nom_auteur = $_POST['Nom_auteur'];

            $stmt = $pdo->prepare("SELECT * FROM livre WHERE Nom_auteur = :Nom_auteur");
            $stmt->execute(['Nom_auteur' => $Nom_auteur]);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
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
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row->ISBN . "</td>";
                echo "<td>" . $row->Titre . "</td>";
                echo "<td>" . $row->Theme . "</td>";
                echo "<td>" . $row->Nb_pages . "</td>";
                echo "<td>" . $row->Format . "</td>";
                echo "<td>" . $row->Nom_auteur . "</td>";
                echo "<td>" . $row->Prenom_auteur . "</td>";
                echo "<td>" . $row->Editeur . "</td>";
                echo "<td>" . $row->Annee_edition . "</td>";
                echo "<td>" . $row->Prix . "</td>";
                echo "<td>" . $row->Langue . "</td>";
                echo "</tr>";
            }
            $pdo = null;
            echo "</tbody>";
            ?>
        </table>
    <?php } ?>
</body>

</html>