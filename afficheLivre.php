<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des livres</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Liste des livres</h1>
        <?php include "header.php"; ?>
    </header>
    <main>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ISBN</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Thème</th>
                    <th scope="col">Nb_pages</th>
                    <th scope="col">Format</th>
                    <th scope="col">Nom auteur</th>
                    <th scope="col">Prénom auteur</th>
                    <th scope="col">Editeur</th>
                    <th scope="col">Année édition</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Langue</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
            </thead>

            <?php

            $dsn = 'mysql:host=localhost;dbname=bdp7';
            $user = 'root';
            $password = '';
            $pdo = new PDO($dsn, $user, $password);


            $query = "SELECT * FROM livre";
            $stmt = $pdo->query($query);

            echo "<tbody>";
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $row->ISBN . "</td>";
                echo "<td>" . $row->Titre . "</td>";
                echo "<td>" . $row->Theme . "</td>";
                echo "<td>" . $row->Nb_pages . "</td>";
                echo "<td>" . $row->Format . "</td>";
                echo "<td>" . $row->Nom_auteur . "</td>";
                echo "<td>" . $row->Prenom_auteur . "</td>";
                echo "<td>" . $row->Editeur . "</td>";
                echo "<td>" . $row->Annee_edition . "</td>";
                echo "<td>" . $row->Prix . "</td>";
                echo "<td>" . $row->Langue . "</td>";
                echo "<td class='pencil'><a href='modifier.php?id=" . $row->id . "' style='color: black;'><i class='fa fa-pencil-alt'></i></a></td>";
                echo "<td class='trash'><a href='javascript:void(0)' onclick='confirmDelete(" . $row->id . ")' style='color: red;'><i class='fa fa-trash'></i></a></td>";
                echo "</tr>";
            }
            $pdo = null;
            echo "</tbody>";
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