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
    require "../PHPMailer/PHPMailerAutoload.php"; // Chargement de PHPMailer
    session_start();
    require_once('database.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

            // Rediriger vers la page verif
            header("Location: ../access/verif.php");
            exit();
            
        } catch (PDOException $e) {
            echo "<p style='color:red;'>Erreur lors de l'inscription : " . htmlspecialchars($e->getMessage()) . "</p>";
        }
 }
    if(isset($_POST['valider'])) {
        // Vérification si un email a été saisi
        if(!empty($_POST['email'])) {
            // Génération d'une clé aléatoire
            $cle = rand(1000000, 9000000);
            // Récupération de l'email saisi
            $email = $_POST['email'];

            // Préparation de la requête d'insertion en base de données
            $insererUser = $bdd->prepare('INSERT INTO users(email, cle, confirme) VALUES(?, ?, ?)');
            // Exécution de la requête avec les valeurs
            $insererUser->execute(array($email, $cle, 0));

            // Préparation de la requête pour récupérer les informations de l'utilisateur
            $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
            $recupUser->execute(array($email));

            // Si l'utilisateur a été trouvé
            if($recupUser->rowCount() > 0) {
                $userInfos = $recupUser->fetch();
                $_SESSION['id'] = $userInfos['id'];

                if (isset($_POST['valider'])) {
                    if (!empty($_POST['email'])) {  // Correction : vérification si l'email est fourni
                        $cle = rand(1000000, 9000000);
                        $email = $_POST['email'];
                        
                        // Insertion dans la base de données
                        $insererUser = $bdd->prepare('INSERT INTO users(email, cle, confirme) VALUES(?, ?, ?)');
                        $insererUser->execute(array($email, $cle, 0));
                
                        if ($insererUser) {
                            echo "Utilisateur inséré avec succès.";
                            
                            // Récupération des informations de l'utilisateur
                            $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
                            $recupUser->execute(array($email));
                
                            if ($recupUser->rowCount() > 0) {
                                $userInfos = $recupUser->fetch();
                                $_SESSION['id'] = $userInfos['id'];
                                
                            // Envoi de l'email de confirmation avec PHPMailer
                            function smtpmailer($to, $from, $from_name, $subject, $body) {
                                $mail = new PHPMailer();
                                $mail->IsSMTP();
                                $mail->SMTPAuth = true; 
                                $mail->SMTPSecure = 'ssl'; 
                                $mail->SMTPDebug = 2;  // Affiche le débogage SMTP
                                $mail->Host = 'smtp.gmail.com';
                                $mail->Port = '465';  
                                $mail->Username = 'vitafittest92@gmail.com';
                                $mail->Password = 'fgjjtcgkqymljwda';
                                
                                $mail->IsHTML(true);
                                $mail->From = $from;
                                $mail->FromName = $from_name;
                                $mail->AddReplyTo($from, $from_name);
                                $mail->Subject = $subject;
                                $mail->Body = $body;
                                $mail->AddAddress($to);

                                if(!$mail->Send()) {
                                    return "Erreur lors de l'envoi de l'email : " . $mail->ErrorInfo;
                                } else {
                                    return "Email envoyé avec succès.";
                                }
                            }
                
                                $to = $email;
                                $from = 'vitafittest92@gmail.com';
                                $name = 'SupportVitafit';
                                $subj = 'Email de confirmation de compte';
                                $msg = 'http://vivafit/dev/access/verif.php?id='.$_SESSION['id'].'&cle='.$cle;
                
                                $error = smtpmailer($to, $from, $name, $subj, $msg);
                                echo $error;
                                
                            } else {
                                echo "Aucun utilisateur trouvé.";
                            }
                        } else {
                            echo "Erreur lors de l'insertion de l'utilisateur.";
                        }
                    } else {
                        echo "Veuillez mettre votre email";
                    }
                }

            }
        } else {
            echo "Veuillez mettre votre email";
        }
    }
    ?>
</main>
</body>
</html>