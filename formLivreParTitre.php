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
        <h1>Affichage d'un livre par Titre</h1>
        <?php include "header.php"; ?>
    </header>
    <main>
        <form action="./traitementAfficheLivreParTitre.php" method="post">
            <label for="Titre">Titre :</label>
            <input type="text" id="Titre" name="Titre" required>

            <input type="submit" value="Rechercher">
        </form>
    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>