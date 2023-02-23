<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Bienvenue sur la page d'accueil</h1>
        <?php
        //Démarrage de la session
        session_start();
        if (!isset($_SESSION['role']) || $_SESSION['role'] != "1") {
            header("Location: index.html");
            exit;
        } ?>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php";
        ?>
    </header>
    <main>
        <!-- <div class="slider">
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
                    <img src="./img/dark_cosmic.png" alt="">
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
        </div> -->
        <div class="slider">
            <img src="img/book.jpg" alt="img1" class="img__slider active" />
            <img src="img/dark_cosmic.png" alt="img2" class="img__slider" />
            <img src="img/harry_potter_saga.png" alt="img3" class="img__slider" />
            <img src="./img/Livre-ouvert.jpg" alt="" class="img__slider" />
            <img src="./img/Livre-ouvert_2.jpg" alt="" class="img__slider" />
            <img src="./img/grid_1.png" alt="" class="img__slider" />
            <img src="./img/Fantasy_library_of_books.png" alt="" class="img__slider" />
            <div class="directions">
                <div class="suivant">
                    <i class="fas fa-chevron-circle-right"></i>
                </div>
                <div class="precedent">
                    <i class="fas fa-chevron-circle-left"></i>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>