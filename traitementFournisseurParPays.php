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
        <h1 class="titrePage">Affichage fournisseur par Pays</h1>
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
    if (isset($_POST['pays'])) {

        $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $pays = $_POST['pays'];

            $stmt = $pdo->prepare("SELECT * FROM fournisseur WHERE Pays = :pays");
            $stmt->execute(['pays' => $pays]);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
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