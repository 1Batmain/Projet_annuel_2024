<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abonnements</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../dev/styles.css">
</head>
<body>
             <!-- Top Notification Bar -->
    <div class="bg-success text-white text-center py-1 d-flex justify-content-between align-items-center">
        <div class="ms-3">
            <span>🔥 Offre spéciale : Les 4 premières semaines à 19€</span>
        </div>
        <div class="me-3">
            <a href="../dev/access/register.php" class="text-white text-decoration-none me-3">S'INSCRIRE</a>
            <a href="#" class="text-white text-decoration-none">✕</a>
        </div>
    </div>
    <?php include '../components/navbar.php'; ?>
    <?php include '../components/fenetre_modale_inscription_connexion.php'; ?>
    <h1>Nos Abonnements</h1>
    <?php include '../components/footer.php'; ?>


<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
<script src="script.js"></script>
</body>
</html>