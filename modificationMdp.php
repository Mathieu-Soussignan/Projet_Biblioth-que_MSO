<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <script src="./js/app.js" defer></script>
    <title>Modification du mot de passe</title>
</head>

<body>
    <main>
        <h1 class="titrePage">Modification du mot de passe</h1>

        <form action="traitementModification.php" method="POST">

            <input type="email" name="mail" placeholder="Adresse e-mail" style="margin-bottom: 20px;">

            <input type="password" name="newPassword" placeholder="Nouveau mot de passe" style="margin-bottom: 20px;">

            <input type="submit" value="Modifier le mot de passe">

        </form>
    </main>

</body>

</html>