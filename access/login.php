<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nom de la Salle de Sport - Connexion</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php require_once('../header/navbar.php'); ?>
    <main>
        <h1>Connexion</h1>
        <form action="login.php" method="post">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            <br>
            <button type="submit">Se connecter</button>
        </form>

        <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once('database.php');

            $email = $_POST['email'];
            $password = $_POST['mot_de_passe'];

            // Préparer et exécuter la requête SQL
            $sql = "SELECT id, mdp FROM users WHERE email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Vérifier le mot de passe
                if (password_verify($password, $user['mdp'])) {
                    $_SESSION['user_id'] = $user['id'];
                    echo "Connexion réussie !";
                    // Rediriger vers la page d'accueil ou tableau de bord
                    header("Location: /index.php");
                    exit();
                } else {
                    echo "Mot de passe incorrect.";
                }
            } else {
                echo "Email non trouvé.";
            }
        }
        ?>
    </main>
    <?php require_once('../footer.php'); ?>
</body>
</html>