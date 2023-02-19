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

        if (isset($_POST['mail']) && isset($_POST['mdp'])) {
            $host = "localhost";
            $db_name = "bdp7";
            $username = "root";
            $password = "";
            $dsn = "mysql:host=$host;dbname=$db_name";
            $options = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try {
                $pdo = new PDO($dsn, $username, $password, $options);
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }

            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];

            $query = "SELECT * FROM user WHERE mail=:mail AND mdp=:mdp";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->execute();

            $donnee = $stmt->fetch();

            if ($donnee) {
                $nom = $donnee['nom'];
                $prenom = $donnee['prenom'];

                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                header("Location: accueil.php");
                exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect";
                echo "Redirection vers la page d'authentification en cours...";
                header("Location: index.html");
            }

            $pdo = null;
        };
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