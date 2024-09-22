<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Cela définit l'encodage des caractères de notre page -->
    <meta charset="UTF-8">
    <!-- Il s'agit du nom de l'onglet -->
    <title>Mon Blog - Inscription</title>
    <!-- Ceci nous permet de faire le lien avec notre fichier css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Ceci nous permet d'ajouter un favicon -->
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body>

<main>
        <h1>Connexion utilisateur</h1>

        <!-- Formulaire de connexion -->
        <form action="/dev/access/result_login.php" method="post">
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

            <button type="submit">Valider</button>
        </form>
    </main>
<?php
    // Vérifier si l'utilisateur existe et que le mot de passe est correct
            if ($result && password_verify($password, $result["mdp"])) {  // Assurer que c'est "mdp" comme dans la base de données
                $_SESSION["email"] = $result["email"];
                $_SESSION["id"] = $result["id"];
                $_SESSION["role"] = $result["role"];
                $_SESSION['logged_in'] = true;

                // Rediriger vers une page après connexion réussie
                header("Location: /dev/acccess/users.php");
                exit();
            } else {
                // Afficher un message d'erreur si l'utilisateur ou le mot de passe est incorrect
                echo '<p style="color:red;">Email ou mot de passe incorrect.</p>';
            }
 ?>
    <!-- J'utilise le PHP afin de factoriser mon code, ici, j'importe le footer sur mes pages afin que le code du footer n'existe qu'à un seul endroit -->
    <!-- Documentation : https://www.php.net/manual/en/function.require-once.php -->
    <?php require_once ('components/footer.php') ?>

</body>

</html>