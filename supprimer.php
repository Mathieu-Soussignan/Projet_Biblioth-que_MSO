<?php
// Connexion à la base de données pour récupérer les informations sur les livres

$connex = mysqli_connect('localhost', 'root', '', 'bdp7');
$id = $_GET['id'];

// Traitement de la suppression d'un livre
if (!$connex) {
    //~ Si la connexion echoue
    echo "<script type=text/javascript>
    ";
    echo "alert('Connexion impossible a la base de données')
</script>";
} else {
    //& Ajouter les requêtes SQL pour modifier et supprimer
    // Récupérer l'ID de la ligne à partir du paramètre d'URL

    $query = "DELETE FROM livre WHERE id = $id";
    //$result = mysqli_query($connect, $sql);
    $result = mysqli_query($connex, $query);
    if ($result) {
        header('location: afficheLivre.php');
        echo "connexion établie";
    } else {
        echo "Erreur lors de la suppression : " . mysqli_error($connex);
    }
}
?>

