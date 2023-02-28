<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bdp7";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

$mail = $_POST['mail'];
$newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

$query = $pdo->prepare("SELECT * FROM user WHERE mail=:mail");
$query->bindParam(':mail', $mail);
$query->execute();

if ($query->rowCount() > 0) {


    $updateQuery = $pdo->prepare("UPDATE user SET mdp=:mdp WHERE mail=:mail");
    $updateQuery->bindParam(':mdp', $newPassword);
    $updateQuery->bindParam(':mail', $mail);
    $updateQuery->execute();

    echo "<p style='font-size: 16px;'>Votre mot de passe a bien été modifié.</p>";
}
?>

<html>

<head>
    <script>
        function redirect() {
            // Afficher le visuel de chargement
            document.getElementById("loading").style.display = "block";

            // Redirection vers la page index.html après 3 secondes
            setTimeout(function() {
                window.location.href = "index.html";
            }, 3000);
        }
    </script>
</head>

<body onload="redirect()">
    <div id="loading" style="display: none; text-align: center; font-size: 40px; font-weight: bold;">Redirection en cours...</div>
</body>

</html>