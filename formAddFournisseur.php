<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de livre</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <header>
        <h1 class="titrePage">Ajouter un fournisseur</h1>
        <?php include "header.php"; ?>
    </header>

    <form action="./traitementFournisseur.php" method="POST">

        <label for="Code_fournisseur">Code fournisseur *:</label>
        <input type="text" id="Code_fournisseur" name="Code_fournisseur" required>
        <br>
        <label for="Raison_sociale">Raison Sociale *:</label>
        <input type="text" id="Raison_sociale" name="Raison_sociale" required>
        <br>
        <label for="Rue_fournisseur">Rue Fournisseur :</label>
        <input type="text" id="Rue_fournisseur" name="Rue_fournisseur">
        <br>
        <label for="Code_postal">Code postal :</label>
        <input type="text" id="Code_postal" name="Code_postal">
        <br>
        <label for="Localite">Localité :</label>
        <input type="text" id="Localite" name="Localite">
        <br>
        <label for="Pays">Pays :</label>
        <input type="text" id="Pays" name="Pays">
        <br>
        <label for="Tel_fournisseur">Tel fournisseur :</label>
        <input type="text" id="Tel_fournisseur" name="Tel_fournisseur">
        <br>
        <label for="Url_fournisseur">Url fournisseur :</label>
        <input type="text" id="Url_fournisseur" name="Url_fournisseur">
        <br>
        <label for="Email_fournisseur">Email fournisseur :</label>
        <input type="text" id="Email_fournisseur" name="Email_fournisseur">
        <br>
        <label for="Reseau_fournisseur">Réseau social :</label>
        <input type="text" id="Reseau_fournisseur" name="Reseau_fournisseur">
        <br><br>
        <input type="submit" value="Ajouter">
    </form>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>