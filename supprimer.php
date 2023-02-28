<?php
    session_start();
    if (!isset($_SESSION['role'])) {
        header("Location: index.html");
        exit;
    }
// Connexion à la base de données pour récupérer les informations sur les livres

try {
    $pdo = new PDO("mysql:host=localhost;dbname=bdp7", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}

$id = $_GET['id'];

// Traitement de la suppression d'un livre
try {
    $query = "DELETE FROM livre WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header('location: afficheLivre.php');
} catch (PDOException $e) {
    echo "Erreur lors de la suppression : " . $e->getMessage();
}
