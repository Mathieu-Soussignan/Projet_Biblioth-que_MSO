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
    <?php
    if (
        
        isset($_POST['ISBN']) && isset($_POST['Titre']) && isset($_POST['Theme']) && isset($_POST['Nb_pages'])
        && isset($_POST['Format']) && isset($_POST['Nom_auteur']) && isset($_POST['Prenom_auteur']) && isset($_POST['Editeur'])
        && isset($_POST['Annee_edition']) && isset($_POST['Prix']) && isset($_POST['Langue'])
    ) {
        $connex = mysqli_connect('localhost', 'root', '', 'bdp7');

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

        // echo $ISBN . "<br>" . $Titre . "<br>" . $Theme . "<br>" . $Nb_pages . "<br>" . $Format . "<br>" . $Nom_auteur . "<br>" . $Prenom_auteur . "<br>" . $Annee_edition . "<br>" . $Prix . "<br>" . $Langue . "<br>";
        // echo "id : " . $id . "<br>";

        $query = "UPDATE livre SET ISBN = '$ISBN', Titre = '$Titre', Theme = '$Theme', Nb_pages = '$Nb_pages', 
        Format = '$Format', Nom_auteur = '$Nom_auteur', Prenom_auteur = '$Prenom_auteur', Annee_edition = '$Annee_edition', 
        Prix = '$Prix', Langue = '$Langue', Editeur = '$Editeur' WHERE id = '$id'";
        $result = mysqli_query($connex, $query);

        if ($result) {

            header("Location: ./afficheLivre.php");
        } else {
            echo "Erreur lors de la modification d'un livre : " . mysqli_error($connex);
        }
        mysqli_close($connex);
     }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>