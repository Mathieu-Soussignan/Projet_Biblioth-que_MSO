   <!DOCTYPE html>
   <html lang="en">

   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Page d'accueil</title>
       <link rel="stylesheet" type="text/css" href="./css/style.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
       <script src="./js/app.js" defer></script>
   </head>

   <header>
       <div style="display: flex; align-items: center; justify-content: space-between;">
           <p id="started" style="margin: 0; font-size: 25px; font-weight: bold;">
               <?php
                session_start();
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
                           <li><a href="./formAddLivre.php">Ajouter un livre</a></li>
                           <li><a href="./formLivreParAuteur.php">Afficher livres par auteur</a></li>
                           <li><a href="./formLivreParTitre.php">Afficher livres par Titre</a></li>
                       </ul>
                   </div>
               <li><a href="#">Fournisseurs</a>
                   <div class="options">
                       <ul>
                           <li><a href="./afficheFournisseurs.php">Afficher les fournisseurs</a></li>
                           <li><a href="./formAddFournisseur.php">Ajouter un fournisseur</a></li>
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

   </html>