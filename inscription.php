<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <main>
        <div>
            <h1>Page d'inscription</h1>
        </div>
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
            <input type="password" id="password" name="mdp" required>
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