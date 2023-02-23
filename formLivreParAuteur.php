<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Affichage d'un livre par Auteur</h1>
        <?php
        //Démarrage de la session
        session_start();
        if (!isset($_SESSION['role']) || $_SESSION['role'] != "1") {
            header("Location: index.html");
            exit;
        }
        ?>
        <!-- Fichier à inclure pour générer le header -->
        <?php include "header.php"; ?>
    </header>
    <main>
        <form action="./traitementAfficheLivreParAuteur.php" method="POST">
            <!-- <select id="Nom_auteur" name="Nom_auteur"> -->
            <select id="Nom_auteur" name="Nom_auteur" class="form-select" aria-label="Default select example">
                <option selected class="text-center">----Choisir un Auteur----</option>
                <!-- <option value="">--Choisir un Auteur--</option> -->
                <?php
                $dsn = 'mysql:host=localhost;dbname=bdp7;charset=utf8';
                $user = 'root';
                $password = '';

                try {
                    $pdo = new PDO($dsn, $user, $password);
                    $stmt = $pdo->query("SELECT DISTINCT Nom_auteur FROM livre");
                    while ($row = $stmt->fetch()) {
                        echo '<option value="' . $row['Nom_auteur'] . '">' . $row['Nom_auteur'] . '</option>';
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
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>