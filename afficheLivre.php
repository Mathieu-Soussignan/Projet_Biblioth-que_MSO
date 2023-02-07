<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des livres</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Liste des livres</h1>
        <?php include "header.php"; ?>
    </header>
    <main>
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
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php
            $connex = mysqli_connect('localhost', 'root', '', 'bdp7');
            $query = "SELECT * FROM livre";
            $result = mysqli_query($connex, $query);
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
                echo "<td>" . $row['Langue'] . "</td>";
                echo "<td style='text-align:center;'><a href='modifier.php?id=" . $row['id'] . "' style='color: black;'><i class='fa fa-pencil-alt'></i></a></td>";
                echo "<td style='text-align:center;'><a href='javascript:void(0)' onclick='confirmDelete(" . $row['id'] . ")' style='color: red;'><i class='fa fa-trash'></i></a></td>";
                echo "</tr>";
            }
            mysqli_close($connex);
            ?>
            <script>
                function confirmDelete(id) {
                    if (confirm("Êtes-vous sûr de vouloir supprimer ce livre ?")) {
                        window.location.href = "supprimer.php?id=" + id + "&action=delete";
                    }
                }
            </script>
        </table>
    </main>
    <footer>
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>