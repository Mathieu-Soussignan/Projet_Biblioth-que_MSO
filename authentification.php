<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

            $query = "SELECT * FROM user WHERE mail=:mail";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':mail', $mail);
            // $stmt->bindParam(':mdp', $mdp);
            $stmt->execute();

            $donnee = $stmt->fetch();

            if ($donnee) {
                // Vérifier si le mot de passe entré correspond au mot de passe stocké
                if ($mdp === $donnee['mdp'] || password_verify($mdp, $donnee['mdp'])) {
                    if ($donnee['role'] == '1' || $donnee['role'] == '2') {
                        $nom = $donnee['nom'];
                        $prenom = $donnee['prenom'];
                        $role = $donnee['role'];

                        $_SESSION['nom'] = $nom;
                        $_SESSION['prenom'] = $prenom;
                        $_SESSION['role'] = $role;

                        header("Location: ./accueil.php");
                    } else {
                        $error = "Erreur: l'utilisateur n'a pas le bon rôle";
                    }
                } else {
                    $error = "Erreur: le mot de passe entré ne correspond pas au mot de passe stocké";
                }
            } else {
                $error = "Erreur: nom d'utilisateur ou mot de passe incorrect";
                header("Location: index.html");
                exit;
            }
        }
        $pdo = null;
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