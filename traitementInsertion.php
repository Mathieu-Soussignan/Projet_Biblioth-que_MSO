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
    
    <?php
    if (
        isset($_POST['ISBN']) && isset($_POST['Titre']) && isset($_POST['Theme']) && isset($_POST['Nb_pages'])
        && isset($_POST['Format']) && isset($_POST['Nom_auteur']) && isset($_POST['Prenom_auteur']) && isset($_POST['Editeur'])
        && isset($_POST['Annee_edition']) && isset($_POST['Prix']) && isset($_POST['Langue'])
    ) {
        $host = "localhost";
        $dbname = "bdp7";
        $user = "root";
        $password = "";
        $ISBN = $_POST['ISBN'];
        $Titre = $_POST['Titre'];
        $Theme = $_POST['Theme'];
        $Nb_pages = $_POST['Nb_pages'];
        $Format = $_POST['Format'];
        $Nom_auteur = $_POST['Nom_auteur'];
        $Prenom_auteur = $_POST['Prenom_auteur'];
        $Annee_edition = $_POST['Annee_edition'];
        $Prix = $_POST['Prix'];
        $Langue = $_POST['Langue'];
        $Editeur = $_POST['Editeur'];

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $stmt = $pdo->prepare("INSERT INTO livre (ISBN, Titre, Theme, Nb_pages, Format, Nom_auteur, Prenom_auteur, Annee_edition, Prix, Langue, Editeur) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$ISBN, $Titre, $Theme, $Nb_pages, $Format, $Nom_auteur, $Prenom_auteur, $Annee_edition, $Prix, $Langue, $Editeur]);
            header("Location: ./afficheLivre.php");
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout du livre : " . $e->getMessage();
        }
        $pdo = null;
    }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>