<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1 class="titrePage">Bienvenue sur la page d'accueil</h1>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>
    <main>
        <div class="slider">
            <div class="contents">
                <div class="content">
                    <img src="./img/book.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./img/Livre-ouvert.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./img/Livre-ouvert_2.jpg" alt="">
                </div>
                <div class="content">
                    <img src="./img/harry_potter_saga.png" alt="">
                </div>
                <div class="content">
                    <img src="./img/harry_potter_saga_2.png" alt="">
                </div>
                <div class="content">
                    <img src="./img/candle_branding.png" alt="">
                </div>
                <div class="content">
                    <img src="./img/dark_cosmic.png" alt="">
                </div>
                <div class="content">
                    <img src="./img/pirate_boat.png" alt="">
                </div>
            </div>
            <div class="directions">
                <div class="left">
                    <i>&#139;</i>
                </div>
                <div class="right">
                    <i>&#155;</i>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>