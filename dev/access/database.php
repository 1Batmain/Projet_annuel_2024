<?php

/* Informations de connexion */
$host = "localhost";
$dbname = "vitafit";
$username = "root";
$password = ""; // Assurez-vous que le mot de passe est correct

/* Création d'une instance PDO */
try {
    /* Connexion à la base de données */
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    /* Configuration pour afficher les erreurs PDO */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    /* Afficher un message d'erreur en cas d'échec */
    echo "Échec de la connexion : " . $e->getMessage();
    die();
}
?>
