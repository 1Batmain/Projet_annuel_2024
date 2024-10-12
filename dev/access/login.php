<?php 
session_start(); 
require_once('log_util.php'); 
ajouterLog(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null, isset($_SESSION['user_id']) ? 'Visite de la page' : 'Visite de la page sans connexion', basename($_SERVER['PHP_SELF'])); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Connexion</title>
    <link rel="stylesheet" href="/dev/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/dev/styles.css">
</head>
<body>
<?php include '../components/navbar.php'; ?>
<?php include '../components/fenetre_modale_inscription_connexion.php'; ?>
<body>
<main>
        <h1>Connexion utilisateur</h1>

        <!-- Formulaire de connexion -->
        <form action="result_login.php" method="post">
            <div class="form_input">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <br>

            <div class="form_input">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <br>

            <button type="submit" name="valider">Valider</button>
        </form>
    </main>
    <?php require_once ('../components/footer.php') ?>
</body>
</html>