<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vitafit - Inscription</title>
    <link rel="stylesheet" href="/dev/style.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>
<main>
    <?php
<<<<<<< HEAD
    require "../PHPMailer/PHPMailerAutoload.php";
    session_start();
			// Vérification du captcha

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['valider'])) {
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

        // Vérification si un email a été saisi
        if (empty($email)) {
            echo "<p style='color:red;'>Veuillez mettre votre email.</p>";
            exit();
        }
	if ($captcha != "true")
	{
		echo "<p style='color:red;'>Completez le captcha pour poursuivre.</p>";
		exit();
	}

        // Génération d'une clé aléatoire
        $cle = rand(1000000, 9000000);
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
        $sql = "INSERT INTO users (nom, prenom, age, email, mdp, cle, confirme, role) VALUES (:nom, :prenom, :age, :email, :mdp, :cle, 0, :role)";
        $stmt = $pdo->prepare($sql);
        
        try {
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':age' => $age,
                ':email' => $email,
                ':mdp' => $hashed_password,
                ':cle' => $cle,
                ':role' => $role
            ]);

            // Récupérer l'ID de l'utilisateur
            $user_id = $pdo->lastInsertId();

            // Initialiser la session de l'utilisateur
            $_SESSION['logged_in'] = false;
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $user_id;
            $_SESSION['role'] = $role;

            // Envoi de l'email de confirmation avec PHPMailer
            function smtpmailer($to, $from, $from_name, $subject, $body) {
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->SMTPAuth = true; 
                $mail->SMTPSecure = 'ssl'; 
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;  
                $mail->Username = 'vitafittest92@gmail.com';
                $mail->Password = 'fgjjtcgkqymljwda';
                
                $mail->IsHTML(true);
                $mail->From = $from;
                $mail->FromName = $from_name;
                $mail->AddReplyTo($from, $from_name);
                $mail->Subject = $subject;
                $mail->Body = $body;
                $mail->AddAddress($to);

                if (!$mail->Send()) {
                    return "Erreur lors de l'envoi de l'email : " . $mail->ErrorInfo;
                } else {
                    return "Email envoyé avec succès.";
                }
            }

            $to = $email;
            $from = 'vitafittest92@gmail.com';
            $name = 'SupportVitafit';
            $subj = 'Email de confirmation de compte';
            $msg = 'Veuillez confirmer votre compte en cliquant sur le lien suivant : <a href="http://vivafit/dev/access/verif.php?id=' . $user_id . '&cle=' . $cle . '">Confirmer mon compte</a>';

            $error = smtpmailer($to, $from, $name, $subj, $msg);
            echo "<p>" . htmlspecialchars($error) . "</p>";

            // Rediriger vers la page de vérification
            header("Location: ../access/verif.php");
            exit();
            
        } catch (PDOException $e) {
            echo "<p style='color:red;'>Erreur lors de l'inscription : " . htmlspecialchars($e->getMessage()) . "</p>";
        }
    }
    ?>
</main>
</body>
</html>
