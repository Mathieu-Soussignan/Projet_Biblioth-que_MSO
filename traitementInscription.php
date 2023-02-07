<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $mail = $_POST['mail'];
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $mdp = $_POST['mdp'];
    if (
        isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp'])   
    ) {
        $connex = mysqli_connect('localhost', 'root', '', 'bdp7');
        $nom =   $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = $_POST['mdp'];
        echo "apres la connexion";

        $query = "INSERT INTO user (nom, prenom, mail, mdp) 
        VALUES ('$nom', '$prenom', '$mail', '$mdp')";
        $result = mysqli_query($connex, $query);


        if ($result) {

            header("Location: index.html");
        } else {
            echo "Erreur lors de l'ajout d'un utilisateur : " . mysqli_error($connex);
        }
        mysqli_close($connex);
    }
    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>