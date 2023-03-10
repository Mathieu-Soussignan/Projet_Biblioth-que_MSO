<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
    <header>
        <h1 class="titrePage">Affichage livres par Auteur</h1>
        <!-- fichier header chargé au démarrage de la page -->
        <?php include "header.php"; ?>
    </header>
    <?php
    if (isset($_POST['Nom_auteur'])) {

        $connex = mysqli_connect('localhost', 'root', '', 'bdp7');

        $Nom_auteur = $_POST['Nom_auteur'];

        $query = "SELECT * FROM livre WHERE Nom_auteur = '$Nom_auteur'";
        $result = mysqli_query($connex, $query); ?>

        <table>
            <tr>
                <th>ISBN</th>
                <th>Titre</th>
                <th>Thème</th>
                <th>Nb_pages</th>
                <th>Format</th>
                <th>Nom auteur</th>
                <th>Prénom auteur</th>
                <th>Editeur</th>
                <th>Année édition</th>
                <th>Prix</th>
                <th>Langue</th>
            </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['ISBN'] . "</td>";
            echo "<td>" . $row['Titre'] . "</td>";
            echo "<td>" . $row['Theme'] . "</td>";
            echo "<td>" . $row['Nb_pages'] . "</td>";
            echo "<td>" . $row['Format'] . "</td>";
            echo "<td>" . $row['Nom_auteur'] . "</td>";
            echo "<td>" . $row['Prenom_auteur'] . "</td>";
            echo "<td>" . $row['Editeur'] . "</td>";
            echo "<td>" . $row['Annee_edition'] . "</td>";
            echo "<td>" . $row['Prix'] . "</td>";
            echo "<td>" . $row['Langue'] . "</td";
            echo "</tr>";
        }
        mysqli_close($connex);
    }
        ?>
        </table>
</body>

</html>