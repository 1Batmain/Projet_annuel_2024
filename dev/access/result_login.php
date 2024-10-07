<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Connexion</title>
    <link rel="stylesheet" href="/dev/style.css">
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

    require_once('../components/navbar.php'); 
    require_once('database.php'); 

    // Fonction pour ajouter un log
    function ajouterLog($pdo, $user_id, $action, $page) {
        $log_sql = "INSERT INTO logs (user_id, action, page_visited) VALUES (:user_id, :action, :page_visited)";
        $log_stmt = $pdo->prepare($log_sql);
        $log_stmt->execute([
            ':user_id' => $user_id,
            ':action' => $action,
            ':page_visited' => $page
        ]);
    }

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
                $_SESSION['user_id'] = $user['id'];  // Changement de 'id' à 'user_id'
                $_SESSION['role'] = $user['role'];

                // Ajouter un log de connexion réussie
                ajouterLog($pdo, $user['id'], 'connexion réussie', 'login.php');

                // Rediriger vers la page d'accueil
                header("Location: ../index.php");
                exit();
            } else {
                // Ajouter un log de tentative de connexion échouée
                ajouterLog($pdo, 0, 'connexion échouée', 'login.php');
                echo '<p style="color:red;">Email ou mot de passe incorrect.</p>';
            }
        }
    }
    ?>
</body>
</html>
