<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "bdp7";

$connex = mysqli_connect('localhost', 'root', '', 'bdp7');

if (!$connex) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération de l'email et du nouveau mot de passe entré par l'utilisateur
$mail = $_POST['mail'];
$newPassword = $_POST['newPassword'];

// Vérification de l'existence de l'email dans la base de données
$query = "SELECT * FROM user WHERE mail='$mail'";
$result = mysqli_query($connex, $query);

if (mysqli_num_rows($result) > 0) {

    // Enregistrement du nouveau mot de passe dans la base de données pour l'utilisateur correspondant à l'email
    $updateQuery = "UPDATE user SET mdp='$newPassword' WHERE mail='$mail'";
    mysqli_query($connex, $updateQuery);

    echo "<p style='font-size: 16px;'>Votre mot de passe a bien été modifié.</p>";
    mysqli_close($connex);
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