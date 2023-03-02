<header>
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <p id="started" style="margin: 0; font-size: 25px; font-weight: bold; margin: 0 0 0 20px;">
            <?php
            // session_start();
            $nom = $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            echo $nom . "&nbsp;" . $prenom;
            ?>
        </p>
        <!-- <a href="javascript:void(0)" onclick="if (confirm('Voulez-vous vraiment vous déconnecter ?')) { location.href='deconnexion.php'; }" style="padding: 10px 0; font-weight: bold; font-size:20px; text-decoration: none; color: black;">Déconnexion</a>-->
        <a href="#" id="logout">Déconnexion</a>
    </div>

    <nav id="navbar">
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="#">Livres</a>
                <div class="options">
                    <ul>
                        <li><a href="./afficheLivre.php">Afficher les livres</a></li>
                        <?php
                        // Vérifiez si l'utilisateur est connecté en tant qu'administrateur
                        if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
                            // Affichez les options d'ajout de livre et de fournisseur
                            echo '<li><a href="./formAddLivre.php">Ajouter un livre</a></li>';
                        }
                        ?>
                        <li><a href="./formLivreParAuteur.php">Afficher livres par auteur</a></li>
                        <li><a href="./formLivreParTitre.php">Afficher livres par Titre</a></li>
                        <li><a href="./afficheAPI.php">Affichage Livres via une API</a></li>
                    </ul>
                </div>
            <li><a href="#">Fournisseurs</a>
                <div class="options">
                    <ul>
                        <li><a href="./afficheFournisseurs.php">Afficher les fournisseurs</a></li>
                        <?php
                        // Vérifiez si l'utilisateur est connecté en tant qu'administrateur
                        if (isset($_SESSION['role']) && $_SESSION['role'] == '1') {
                            // Affichez les options d'ajout de livre et de fournisseur
                            echo '<li><a href="./formAddFournisseur.php">Ajouter un fournisseur</a></li>';
                        }
                        ?>
                        <li><a href="./formFournisseurParRaison.php">Afficher fournisseur par Raison sociale</a></li>
                        <li><a href="./formFournisseurParPays.php">Afficher fournisseur par pays</a></li>
                        <li><a href="./formFournisseurParLocalite.php">Afficher fournisseur par localité</a></li>
                    </ul>
                </div>
            </li>
            <li id="toggle">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div id="ball" onclick="ShiftBall()" class=" ball"></div>
            </li>
        </ul>
    </nav>
</header>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="./js/API.js" defer></script>
<script src="./js/app.js" defer></script>
<script src="./js/slider.js" defer></script>