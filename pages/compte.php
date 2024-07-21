<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /access/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - Nom de la Salle de Sport</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include '../header/navbar.php'; ?>
    <main>
        <h1>Mon Compte</h1>
        <p>Bienvenue sur votre compte. Gérez vos informations personnelles et vos abonnements.</p>
        <!-- Ajouter ici les informations du compte utilisateur et les options de gestion -->
    </main>
    <?php include '../footer.php'; ?>
</body>
</html>
