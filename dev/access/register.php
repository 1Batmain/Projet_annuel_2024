<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Inscription</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php
require_once '../recaptcha/autoload.php';
if (isset($_POST['submitpost'])) {
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha = new \ReCaptcha\ReCaptcha('6LdF2UsqAAAAAGxZpiFdi8Q3fuxWiYcixc6XsGo4'); // Utilise ta clé secrète ici
        $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
        if ($resp->isSuccess()) {
            // Verified!
            var_dump('Captcha Valide');
        } else {
            $errors = $resp->getErrorCodes();
            var_dump('Captcha Invalide');
            var_dump($errors);
        }
    } else {
        var_dump('Captcha non rempli');
    }
}
?>
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

        <div class="form_input">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <br>

        <div class="form_input">
            <label for="confirmation_de_mot_de_passe">Confirmation de mot de passe</label>
            <input type="password" id="confirmation_de_mot_de_passe" name="confirmation_de_mot_de_passe" required>
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
        
        <!-- reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LdF2UsqAAAAADoxSBRx49FTzLGYPZflnnQ6olx7"></div>
        <br>

        <input type="submit" value="Valider" name="submitpost">
    </form>
</main>
<?php include '../components/footer.php'; ?>
</body>
</html>