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
                <th>Code fournisseur</th>
                <th>Raison Sociale</th>
                <th>Rue fournisseur</th>
                <th>Code postal</th>
                <th>Localité</th>
                <th>Pays</th>
                <th>Tel fournisseur</th>
                <th>Url fournisseur</th>
                <th>Email fournisseur</th>
                <th>Réseau social Fournisseur</th>
            </tr>
            <?php

            $dsn = 'mysql:host=localhost;dbname=bdp7';
            $user = 'root';
            $password = '';
            $pdo = new PDO($dsn, $user, $password);


            $query = "SELECT * FROM fournisseur";
            $stmt = $pdo->query($query);


            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "<tr>";
                echo "<td>" . $row->Code_fournisseur . "</td>";
                echo "<td>" . $row->Raison_sociale . "</td>";
                echo "<td>" . $row->Rue_fournisseur . "</td>";
                echo "<td>" . $row->Code_postal . "</td>";
                echo "<td>" . $row->Localite . "</td>";
                echo "<td>" . $row->Pays . "</td>";
                echo "<td>" . $row->Tel_fournisseur . "</td>";
                echo "<td>" . $row->Url_fournisseur . "</td>";
                echo "<td>" . $row->Email_fournisseur . "</td>";
                echo "<td>" . $row->Reseau_fournisseur . "</td>";
                // echo "<td class='pencil'><a href='modifier.php?id=" . $row->id . "' style='color: black;'><i class='fa fa-pencil-alt'></i></a></td>";
                // echo "<td class='trash'><a href='javascript:void(0)' onclick='confirmDelete(" . $row->id . ")' style='color: red;'><i class='fa fa-trash'></i></a></td>";
                echo "</tr>";
            }
            $pdo = null;
            ?>
            <!-- <script>
                function confirmDelete(id) {
                    if (confirm("Êtes-vous sûr de vouloir supprimer ce livre ?")) {
                        window.location.href = "supprimer.php?id=" + id + "&action=delete";
                    }
                }
            </script> -->
        </table>
    </main>
    <footer>
        <p id="end">Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>