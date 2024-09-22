<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Connexion</title>
    <link rel="stylesheet" href="../style.css">  <!-- Chemin relatif corrigé -->
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">  <!-- Chemin relatif corrigé -->
</head>
<body>
    <?php require_once('../components/nav.php'); ?>  <!-- Chemin relatif corrigé -->

    <main>
        <?php
        session_start();  // Démarrer la session pour stocker des informations après connexion

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            // Rediriger vers la page d'accueil si déjà connecté
            header("Location: ../index.php");  // Chemin relatif corrigé
            exit();
        }

        require_once('../access/database.php');  // Inclure la connexion à la base de données

        // Vérification que le formulaire a bien été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['mot_de_passe'];

            // Vérification des champs vides
            if (empty($email) || empty($password)) {
                echo '<p style="color:red;">Veuillez remplir tous les champs.</p>';
                exit();
            }

            // Requête pour vérifier si l'utilisateur existe
            $request = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $request->bindParam(':email', $email);
            $request->execute();

            // Récupérer l'utilisateur correspondant à l'email
            $user = $request->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['mdp'])) {
                // Si l'utilisateur existe et que le mot de passe est correct, enregistrer les informations dans la session
                $_SESSION['logged_in'] = true;
                $_SESSION['email'] = $user['email'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                // Rediriger vers la page d'accueil ou une autre page
                header("Location: ../index.php");
                exit();
            } else {
                // Si l'utilisateur n'existe pas ou que le mot de passe est incorrect
                echo '<p style="color:red;">Email ou mot de passe incorrect.</p>';
            }
        } else {
            echo '<p style="color:red;">Requête invalide.</p>';
        }

        // Fermer la connexion à la base de données
        $pdo = null;
        ?>
    </main>

    <?php require_once('../components/footer.php'); ?>  <!-- Chemin relatif corrigé -->

</body>
</html>