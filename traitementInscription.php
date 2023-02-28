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
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp'])) {
        $host = 'localhost';
        $db   = 'bdp7';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $role = $_POST['role'];

        // vérifie si le mot de passe saisi correspond au hachage stocké

        // ok sur le login mais pas sur l'inscription
        
        // if (password_verify($entered_password, $hashed_password)) {
        //     echo 'Le mot de passe est correct !';
        // } else {
        //     echo 'Le mot de passe est incorrect!';
        // }

        $query = "INSERT INTO user (nom, prenom, mail, mdp, role) VALUES (:nom, :prenom, :mail, :mdp, :role)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':mail' => $mail,
            ':mdp' => $mdp,
            ':role' => $role
        ]);

        if ($stmt) {
            header("Location: index.html");
        } else {
            echo "Erreur lors de l'ajout d'un utilisateur : " . $pdo->errorInfo()[2];
        }
    }

    ?>
    <footer>
        <p>Copyright ©2023 Bibliothèque</p>
    </footer>
</body>

</html>