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
        <h1 class="titrePage">Affichage fournisseur par Raison sociale</h1>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>
    <?php
    if (isset($_POST['Raison_sociale'])) {

        $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
        $user = 'root';
        $password = '';

        try {
            $pdo = new PDO($dsn, $user, $password);
            $Raison_sociale = $_POST['Raison_sociale'];

            $stmt = $pdo->prepare("SELECT * FROM fournisseur WHERE Raison_sociale = ?");
            $stmt->execute([$Raison_sociale]);
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        $pdo = null;
    ?>
        <table>
            <tr>
                <th>Code fournisseur</th>
                <th>Raison Sociale</th>
                <th>Rue fournisseur</th>
                <th>Code postal</th>
                <th>Localité</th>
                <th>Pays</th>
                <th>Tel fournisseur</th>
                <th>Url fournisseur</th>
                <th>Email fournisseur</th>
                <th>Réseau social Fournisseur</th>
            </tr>
            <?php
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
            ?>
        </table>
    <?php } ?>
</body>

</html>