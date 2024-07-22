<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nom de la Salle de Sport - Inscription</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require_once('../header/navbar.php'); ?>
    <main>
        <h1>Création d'un utilisateur</h1>
        <form action="register.php" method="post">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>
            <br>
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
            <br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            <br>
            <label for="confirmation_de_mot_de_passe">Confirmation de mot de passe</label>
            <input type="password" id="confirmation_de_mot_de_passe" name="confirmation_de_mot_de_passe" required>
            <br>
            <button type="submit">Valider</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once('database.php');

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $password = $_POST['mot_de_passe'];
            $confirm_password = $_POST['confirmation_de_mot_de_passe'];

            if ($password !== $confirm_password) {
                echo "Les mots de passe ne correspondent pas.";
                exit();
            }

            if ($age < 18) {
                echo "Vous devez avoir au moins 18 ans pour vous inscrire.";
                exit();
            }

            // Hachage du mot de passe pour la sécurité
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Préparer et exécuter la requête SQL
            $sql = "INSERT INTO users (nom, prenom, age, email, mdp) VALUES (:nom, :prenom, :age, :email, :mdp)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':age' => $age,
                ':email' => $email,
                ':mdp' => $hashed_password
            ]);

            echo "Inscription réussie !";
        }
        ?>
    </main>
    <?php require_once('../footer.php'); ?>
</body>
</html>