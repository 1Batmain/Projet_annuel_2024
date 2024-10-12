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

<<<<<<< HEAD
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valider'])) {
          $email = $_POST['email'];
        $password = $_POST['mot_de_passe'];
        
        if (empty($email) || empty($password)) {

        $recupUser = $pdo->prepare('SELECT*FROM users WHERE  email = ?');
        $recupUser->execute(array($_POST['email']));
        if($recupUser->rowCount() > 0){
                $userInfo = $recupUser->fetch();
                if($userInfo['confirme'] == 1){
                    header('Location: ../access/verif.php?id='.$userInfo['id'].'&cle='.$userInfo['cle']);
		if ($captcha != "true")
		{
			echo "<p style='color:red;'>Completez le captcha pour poursuivre.</p>";
			exit();
		}
                }else{
                    echo "Vous n'etes pas confirmé au niveau du site";
                }
        }else{
            echo "L'utilisateur n'existe pas";
        }

       }else{
                echo " Veuillez mettre votre e-mail";
       }

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
                // Vérifier si l'email a été confirmé
                if ($user['confirme'] == 1) {
                    // Enregistrer les informations utilisateur dans la session
                    $_SESSION['logged_in'] = true;
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['role'] = $user['role'];

                    // Ajouter un log de connexion réussie
                    ajouterLog($pdo, $user['id'], 'connexion réussie', 'login.php');

                    // Rediriger vers la page d'accueil
                    header("Location: ../index.php");
                    exit();
                } else {
                    // Ajouter un log pour un email non confirmé
                    ajouterLog($pdo, $user['id'], 'connexion échouée (email non confirmé)', 'login.php');
                    echo '<p style="color:red;">Votre compte n\'a pas encore été confirmé. Veuillez vérifier votre boîte mail pour confirmer votre compte.</p>';
                }
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
