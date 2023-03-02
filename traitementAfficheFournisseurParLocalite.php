<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: index.html");
    exit;
}
?>
<body>
    <h1 class="titrePage">Affichage fournisseur par Localité</h1>
    <!-- fichier header chargé au démarrage de la page -->
    <?php include "header.php"; ?>
    <?php
    if (isset($_POST['localite'])) {

        $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $localite = $_POST['localite'];

            $stmt = $pdo->prepare("SELECT * FROM fournisseur WHERE Localite = :localite");
            $stmt->execute(['localite' => $localite]);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
        $pdo = null;
    ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Code fournisseur</th>
                    <th scope="col" class="text-center">Raison Sociale</th>
                    <th scope="col" class="text-center">Rue fournisseur</th>
                    <th scope="col" class="text-center">Code postal</th>
                    <th scope="col" class="text-center">Localité</th>
                    <th scope="col" class="text-center">Pays</th>
                    <th scope="col" class="text-center">Tel fournisseur</th>
                    <th scope="col" class="text-center">Url fournisseur</th>
                    <th scope="col" class="text-center">Email fournisseur</th>
                    <th scope="col" class="text-center">Réseau social Fournisseur</th>
                </tr>
            </thead>
            <?php
            echo "<tbody>";
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row->Code_fournisseur . "</td>";
                echo "<td>" . $row->Raison_sociale . "</td>";
                echo "<td>" . $row->Rue_fournisseur . "</td>";
                echo "<td>" . $row->Code_postal . "</td>";
                echo "<td>" . $row->Localite . "</td>";
                echo "<td>" . $row->Pays . "</td>";
                echo "<td>" . $row->Tel_fournisseur . "</td>";
                echo "<td>" . $row->Url_fournisseur . "</td>";
                echo "<td>" . $row->Email_fournisseur . "</td>";
                echo "<td>" . $row->Reseau_fournisseur . "</td>";
                echo "</tr>";
            }
            $pdo = null;
            echo "</tbody>";
            ?>
        </table>
    <?php } ?>
</body>

</html>