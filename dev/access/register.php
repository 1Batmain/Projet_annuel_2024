<?php 
session_start(); 
require_once('../access/log_util.php'); 
ajouterLog(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null, isset($_SESSION['user_id']) ? 'Visite de la page' : 'Visite de la page sans connexion', basename($_SERVER['PHP_SELF'])); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Inscription</title>
    <link rel="stylesheet" href="/dev/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/dev/styles.css">
</head>
<body>
<?php include '../components/navbar.php'; ?>
<?php include '../components/fenetre_modale_inscription_connexion.php'; ?>
<main>
    <h1>Création d'un utilisateur</h1>
    <form action="result.php" method="POST">
        <div class="form_input">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <br>

        <div class="form_input">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <br>

        <div class="form_input">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
        </div>
        <br>

        <div class="form_input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>

    <label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" class="passvue" placeholder="Mot de passe" required>
        <div class="password-icon">
            <i class="feather-eye eye" data-feather="eye"></i>
            <i class="feather-eye-off eye-off" data-feather="eye-off" style="display: none;"></i>
        </div>
    </label>
<br>
<label>
    <input type="password" id="confirmation_de_mot_de_passe" class="passvue" name="confirmation_de_mot_de_passe" placeholder="Confirmation Mot de passe" required>
    <div class="password-icon">
        <i class="feather-eye eye" data-feather="eye"></i>
        <i class="feather-eye-off eye-off" data-feather="eye-off" style="display: none;"></i>
    </div>
</label>
        </div>
        <br>
        
        <div class="form_input">
            <label for="role">Rôle </label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <br>
        <button type="submit">Valider</button>
        </form>
    </main>
<script src="https://unpkg.com/feather-icons"></script>
<script src="../js/eye.js"></script>
<script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
<script src="../script.js"></script>
<script></script>
<?php include '../components/footer.php'; ?>
</body>
</html>