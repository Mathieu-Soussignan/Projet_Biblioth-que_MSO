<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <header>
        <?php
        session_start();
        if (!isset($_SESSION['role'])) {
            header("Location: index.html");
            exit;
        }
        ?>
    </header>
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

        try {
            $connex = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
            $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $id = $_POST['id'];
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
            $query = "UPDATE livre SET ISBN = :ISBN, Titre = :Titre, Theme = :Theme, Nb_pages = :Nb_pages, 
                  Format = :Format, Nom_auteur = :Nom_auteur, Prenom_auteur = :Prenom_auteur, Annee_edition = :Annee_edition, 
                  Prix = :Prix, Langue = :Langue, Editeur = :Editeur WHERE id = :id";
            $stmt = $connex->prepare($query);
            $stmt->bindParam(':ISBN', $ISBN);
            $stmt->bindParam(':Titre', $Titre);
            $stmt->bindParam(':Theme', $Theme);
            $stmt->bindParam(':Nb_pages', $Nb_pages);
            $stmt->bindParam(':Format', $Format);
            $stmt->bindParam(':Nom_auteur', $Nom_auteur);
            $stmt->bindParam(':Prenom_auteur', $Prenom_auteur);
            $stmt->bindParam(':Annee_edition', $Annee_edition);
            $stmt->bindParam(':Prix', $Prix);
            $stmt->bindParam(':Langue', $Langue);
            $stmt->bindParam(':Editeur', $Editeur);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            header("Location: ./afficheLivre.php");
        } catch (PDOException $e) {
            echo "Erreur lors de la modification d'un livre : " . $e->getMessage();
        }
    }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>