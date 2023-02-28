<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <script src="./js/app.js" defer></script>
    <title>Modification du mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="titrePage">Modification du mot de passe</h1>
        <?php
        session_start();
        if (!isset($_SESSION['role'])) {
            header("Location: index.html");
            exit;
        }
        ?>
    </header>
    <main>
        <form action="traitementModification.php" method="POST">

            <input type="email" name="mail" placeholder="Adresse e-mail" style="margin-bottom: 20px;">

            <input type="password" name="newPassword" placeholder="Nouveau mot de passe" style="margin-bottom: 20px;">

            <input type="submit" value="Modifier le mot de passe">

            <!-- lien vers la page d'authentification -->
            <a href="./index.html" style=" padding: 10px 20px; font-size:20px; font-weight: bold; text-decoration: none; color: black;">Annuler</a>
        </form>
    </main>

</body>

</html>