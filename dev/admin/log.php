<?php
session_start();
require_once('../access/database.php');

// Vérifier si l'utilisateur est connecté et s'il a un rôle d'admin (role = 1)
if (!isset($_SESSION['logged_in']) || $_SESSION['role'] != 1) {
    header("Location: ../index.php");
    exit();
}

// Récupérer les logs depuis la base de données
$logs_sql = "SELECT logs.*, users.nom, users.prenom, users.email 
             FROM logs 
             LEFT JOIN users ON logs.user_id = users.id 
             ORDER BY logs.timestamp DESC";
$logs_stmt = $pdo->prepare($logs_sql);
$logs_stmt->execute();
$logs = $logs_stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Logs</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php require_once('../components/navbar.php'); ?>
    <main>
        <h1>Logs de connexion et de visites</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Utilisateur</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th>Page Visitée</th>
                    <th>Date et Heure</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $log): ?>
                    <tr>
                        <td><?= $log['user_id'] ? $log['user_id'] : 'Anonyme' ?></td>
                        <td><?= $log['nom'] ?? 'Anonyme' ?></td>
                        <td><?= $log['email'] ?? 'Anonyme' ?></td>
                        <td><?= $log['action'] ?></td>
                        <td><?= $log['page_visited'] ?></td>
                        <td><?= $log['timestamp'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="../script.js"></script>
    <?php include '../components/footer.php'; ?>
</body>
</html>