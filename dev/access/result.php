<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
<main>
    <?php
        session_start();  // Démarre la session

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once('database.php');

            // Récupérer les valeurs du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $password = $_POST['mot_de_passe'];
            $confirm_password = $_POST['confirmation_de_mot_de_passe'];
            $role = $_POST['role'];

            // Vérification des mots de passe
            if ($password !== $confirm_password) {
                echo "<p style='color:red;'>Les mots de passe ne correspondent pas.</p>";
                exit();
            }

            // Vérification de l'âge
            if ($age < 18) {
                echo "<p style='color:red;'>Vous devez avoir au moins 18 ans pour vous inscrire.</p>";
                exit();
            }

            // Hachage du mot de passe pour la sécurité
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Vérification de l'email unique
            $checkEmailSQL = "SELECT COUNT(*) FROM users WHERE email = :email";
            $checkStmt = $pdo->prepare($checkEmailSQL);
            $checkStmt->execute([':email' => $email]);
            $emailExists = $checkStmt->fetchColumn();

            if ($emailExists > 0) {
                echo "<p style='color:red;'>Cet email est déjà utilisé.</p>";
                exit();
            }

            // Préparation et exécution de la requête SQL
            $sql = "INSERT INTO users (nom, prenom, age, email, mdp, role) VALUES (:nom, :prenom, :age, :email, :mdp, :role)";
            $stmt = $pdo->prepare($sql);
            
            try {
                $stmt->execute([
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':age' => $age,
                    ':email' => $email,
                    ':mdp' => $hashed_password,
                    ':role' => $role
                ]);

                // Récupérer l'ID de l'utilisateur
                $user_id = $pdo->lastInsertId();

                // Initialiser la session de l'utilisateur
                $_SESSION['logged_in'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $user_id;  // Assurez-vous d'utiliser le bon champ d'identifiant
                $_SESSION['role'] = $role;

                // Rediriger vers la page d'accueil
                header("Location: ../index.php");
                exit();
                
            } catch (PDOException $e) {
                echo "<p style='color:red;'>Erreur lors de l'inscription : " . htmlspecialchars($e->getMessage()) . "</p>";
            }
        }
    ?>
</main>
<?php include 'components/footer.php'; ?>
</body>
</html>