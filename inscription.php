<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php 
        session_start();
        ?>
        <h1 class="titrePage">Page d'inscription</h1>
    </header>
    <main>
        <!-- formulaire d'inscription -->
        <form action="traitementInscription.php" method="POST">

            <label for="Nom">Nom :</label>
            <br>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <br>
            <label for="mail">Adresse email :</label>
            <input type="email" id="mail" name="mail" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="mdp" required minlength="8">
            <br>
            <label for="role">Rôle :</label>
            <select id="role" name="role" class="form-select" aria-label="Default select example">
                <option value="1" selected class="text-center">Admin</option>
                <option value="2" selected selected class="text-center">Utilisateur</option>
            </select>
            <br><br>

            <input type="submit" value="S'inscrire">
            <br>
            <!-- lien vers la page d'authentification -->
            <a href="./index.html" style=" padding: 10px 20px; font-size:20px; font-weight: bold; text-decoration: none; color: black;">Annuler</a>
        </form>
    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>