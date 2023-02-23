<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Ajouter un livre</h1>
        <?php
        session_start();
        if (!isset($_SESSION['role']) || $_SESSION['role'] != "1") {
            header("Location: index.html");
            exit;
        }
        ?>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>

    <form action="./traitementInsertion.php" method="POST">

        <label for="ISBN">ISBN *:</label>
        <input type="text" id="ISBN" name="ISBN" required>
        <br>
        <label for="Titre">Titre *:</label>
        <input type="text" id="Titre" name="Titre" required>
        <br>
        <label for="Theme">Thème :</label>
        <input type="text" id="Theme" name="Theme">
        <br>
        <label for="Nb_pages">Nb_pages :</label>
        <input type="text" id="Nb_pages" name="Nb_pages">
        <br>
        <label for="Format">Format :</label>
        <input type="text" id="Format" name="Format">
        <br>
        <label for="Nom_auteur">Nom auteur *:</label>
        <input type="text" id="Nom_auteur" name="Nom_auteur" required>
        <br>
        <label for="Prenom_auteur">Prénom auteur *:</label>
        <input type="text" id="Prenom_auteur" name="Prenom_auteur" required>
        <br>
        <label for="Editeur">Editeur :</label>
        <input type="text" id="Editeur" name="Editeur">
        <br>
        <label for="Annee_edition">Année édition :</label>
        <input type="text" id="Annee_edition" name="Annee_edition">
        <br>
        <label for="Prix">Prix :</label>
        <input type="text" id="Prix" name="Prix">
        <br>
        <label for="Langue">Langue :</label>
        <input type="text" id="Langue" name="Langue">
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>