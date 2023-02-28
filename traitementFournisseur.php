<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['role'])) {
        header("Location: index.html");
        exit;
    }
    ?>
    <?php
    if (
        isset($_POST['Code_fournisseur']) && isset($_POST['Raison_sociale']) && isset($_POST['Rue_fournisseur']) && isset($_POST['Code_postal'])
        && isset($_POST['Localite']) && isset($_POST['Pays']) && isset($_POST['Tel_fournisseur']) && isset($_POST['Url_fournisseur'])
        && isset($_POST['Email_fournisseur']) && isset($_POST['Reseau_fournisseur'])
    ) {
        $host = "localhost";
        $dbname = "bdp7";
        $user = "root";
        $password = "";
        $Code_fournisseur = $_POST['Code_fournisseur'];
        $Raison_sociale = $_POST['Raison_sociale'];
        $Rue_fournisseur = $_POST['Rue_fournisseur'];
        $Code_postal = $_POST['Code_postal'];
        $Localite = $_POST['Localite'];
        $Pays = $_POST['Pays'];
        $Tel_fournisseur = $_POST['Tel_fournisseur'];
        $Url_fournisseur = $_POST['Url_fournisseur'];
        $Email_fournisseur = $_POST['Email_fournisseur'];
        $Reseau_fournisseur = $_POST['Reseau_fournisseur'];

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $stmt = $pdo->prepare("INSERT INTO fournisseur (Code_fournisseur, Raison_sociale, Rue_fournisseur, Code_postal, Localite, Pays, Tel_fournisseur, Url_fournisseur, Email_fournisseur, Reseau_fournisseur) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$Code_fournisseur, $Raison_sociale, $Rue_fournisseur, $Code_postal, $Localite, $Pays, $Tel_fournisseur, $Url_fournisseur, $Email_fournisseur, $Reseau_fournisseur]);
            header("Location: ./afficheFournisseurs.php");
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du livre : " . $e->getMessage();
        }
        $pdo = null;
    }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>