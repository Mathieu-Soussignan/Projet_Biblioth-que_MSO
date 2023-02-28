<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script src="./js/API.js" defer></script>
</head>

<body>
    <header>
        <h1 class="titrePage" id="solo">Bienvenue sur la page de consulation Google Book</h1>
        <?php
        session_start();
        if (!isset($_SESSION['role'])) {
            header("Location: index.html");
            exit;
        }
        ?>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>
    <main>
        <h2>Exemple d'utilisation d'une API</h2>
        <div id="isbn-container">
            <label for="isbn-input">ISBN:</label>
            <input type="text" id="isbn-input">
            <button id="fetch-btn">Recupérer les infos d'un Livre</button>
        </div>
        <table id="resultat"></table>
    </main>
    <footer>
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>