<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Connexion</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
</head>
<body>
    <?php 
    session_start(); 

    // Si l'utilisateur est déjà connecté, le rediriger
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header("Location: ../index.php");
        exit();
    }

    require_once('../components/navbar.php'); // Inclure la navbar
    ?>

    <main>
        <?php
        require_once('../access/database.php');  // Connexion à la base de données

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['mot_de_passe'];

            // Vérification des champs
            if (empty($email) || empty($password)) {
                echo '<p style="color:red;">Veuillez remplir tous les champs.</p>';
            } else {
                // Vérifier si l'utilisateur existe
                $request = $pdo->prepare("SELECT * FROM users WHERE email = :email");
                $request->bindParam(':email', $email);
                $request->execute();

                // Récupérer l'utilisateur
                $user = $request->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($password, $user['mdp'])) {
                    // Enregistrer les informations utilisateur dans la session
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['role'] = $user['role'];

                    // Rediriger vers la page d'accueil
                    header("Location: ../index.php");
                    exit();
                } else {
                    echo '<p style="color:red;">Email ou mot de passe incorrect.</p>';
                }
            }
        }
        ?>
    </main>
</body>
</html>