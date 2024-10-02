<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Inscription</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
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
        <button type="submit">Valider</button>
    </form>
</main>
<?php include '../components/footer.php'; ?>
</body>
</html>