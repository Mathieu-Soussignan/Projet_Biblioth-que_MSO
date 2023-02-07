<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
</head>

<body>
    <main>
        <?php

        session_start();
        
        if (
            isset($_POST['mail']) && isset($_POST['mdp'])) {

            $connex = mysqli_connect("localhost", "root", "", "bdp7");

            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];

            
            $query = "SELECT * FROM user WHERE mail='$mail' AND mdp='$mdp'";
            $result = mysqli_query($connex, $query);
            $donnee = mysqli_fetch_array($result);
            if ($donnee)
            {

            $nom = $donnee[1];
            $prenom = $donnee[2];
            // echo $nom. " " . $prenom;
        
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            header("Location: accueil.php");
            exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect";
            }

            mysqli_close($connex);
        }
        ?>

        <?php if (isset($error)) { ?>
            <p><?php echo $error; ?></p>
        <?php } ?>

    </main>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>