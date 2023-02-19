<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <header>
        <h1 class="titrePage">Affichage d'un fournisseur par pays</h1>
        <?php include "header.php"; ?>
    </header>
    <main>
        <form action="./traitementFournisseurParPays.php" method="POST">
            <select id="pays" name="pays">
                <option value="">--Choisir un pays--</option>
                <?php
                $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
                $user = 'root';
                $password = '';

                try {
                    $pdo = new PDO($dsn, $user, $password);
                    $stmt = $pdo->query("SELECT DISTINCT Pays FROM fournisseur");
                    while ($row = $stmt->fetch()) {
                        echo '<option value="' . $row['Pays'] . '">' . $row['Pays'] . '</option>';
                    }
                } catch (PDOException $e) {
                    echo "Erreur : " . $e->getMessage();
                }
                $pdo = null;
                ?>
            </select>
            <br><br>
            <input type="submit" value="Rechercher">
            <br>
            <!-- lien vers la page d'authentification -->
            <a href="./accueil.php" style=" padding: 10px 20px; font-size:20px; font-weight: bold; text-decoration: none; color: black;">Annuler</a>
        </form>
    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>