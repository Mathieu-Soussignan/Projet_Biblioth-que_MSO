<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- lien vers la page d'authentification -->
        <a href="javascript:void(0)" onclick="if (confirm('Voulez-vous vraiment vous déconnecter ?')) { location.href='deconnexion.php'; }" style="display:inline-block; padding: 10px 20px; font-weight: bold; font-size:20px; text-decoration: none; color: black; background-color: #ddd; border-radius: 5px;">Déconnexion</a>

        <h1 class="titrePage">Edition d'un ouvrage</h1>
        <?php
        $connex = mysqli_connect('localhost', 'root', '', 'bdp7');
        $id = $_GET['id'];
        $query = "SELECT * FROM livre WHERE id = '$id'";
        $result = mysqli_query($connex, $query);
        $livre = mysqli_fetch_array($result);
        mysqli_close($connex);

        ?>
        <form action="traitementModifier.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $livre['id']; ?>">
            <div>
                <label for="ISBN">ISBN :</label>
                <input type="text" id="ISBN" name="ISBN" value="<?php echo $livre['ISBN']; ?>">
            </div>
            <div>
                <label for="Titre">Titre :</label>
                <input type="text" id="Titre" name="Titre" value="<?php echo $livre['Titre']; ?>">
            </div>
            <div>
                <label for="titre">Theme :</label>
                <input type="text" id="Theme" name="Theme" value="<?php echo $livre['Theme']; ?>">
            </div>
            <div>
                <label for="titre">Nb_pages :</label>
                <input type="text" id="Nb_pages" name="Nb_pages" value="<?php echo $livre['Nb_pages']; ?>">
            </div>
            <div>
                <label for="titre">Format :</label>
                <input type="text" id="Format" name="Format" value="<?php echo $livre['Format']; ?>">
            </div>
            <div>
                <label for="titre">Nom_auteur :</label>
                <input type="text" id="Nom_auteur" name="Nom_auteur" value="<?php echo $livre['Nom_auteur']; ?>">
            </div>
            <div>
                <label for="titre">Prenom_auteur :</label>
                <input type="text" id="Prenom_auteur" name="Prenom_auteur" value="<?php echo $livre['Prenom_auteur']; ?>">
            </div>
            <div>
                <label for="titre">Editeur :</label>
                <input type="text" id="Editeur" name="Editeur" value="<?php echo $livre['Editeur']; ?>">
            </div>
            <div>
                <label for="titre">Annee_edition :</label>
                <input type="text" id="Annee_edition" name="Annee_edition" value="<?php echo $livre['Annee_edition']; ?>">
            </div>
            <div>
                <label for="titre">Prix :</label>
                <input type="text" id="Prix" name="Prix" value="<?php echo $livre['Prix']; ?>">
            </div>
            <div>
                <label for="titre">Langue :</label>
                <input type="text" id="Langue" name="Langue" value="<?php echo $livre['Langue']; ?>">
            </div>
            <br><br>
            <input type="submit" value="Modifier">
            <br>
            <!-- lien vers la page d'inscription -->
            <a href="./afficheLivre.php" style="display:inline-block; padding: 10px 20px; font-size:16px; width: 40%; font-weight: bold; text-decoration: none; color: black; background-color: #ddd; border-radius: 5px; text-align:center;">Annuler</a>
        </form>
    </main>
</body>

</html>