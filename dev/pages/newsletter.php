<?php 
session_start(); 
require_once('../access/log_util.php'); 
ajouterLog(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null, isset($_SESSION['user_id']) ? 'Visite de la page' : 'Visite de la page sans connexion', basename($_SERVER['PHP_SELF'])); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription à la Newsletter</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers votre fichier CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #007bff;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

.response-message {
    margin-top: 20px;
    text-align: center;
    font-size: 16px;
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Inscription à notre Newsletter</h1>
        <p>Recevez les dernières actualités et offres directement dans votre boîte mail !</p>
        
        <form id="newsletterForm">
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required placeholder="Entrez votre adresse e-mail">
            </div>
            <div class="form-group">
                <button type="submit" class="btn">S'inscrire</button>
            </div>
        </form>
        
        <div id="responseMessage" class="response-message" style="display: none;"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#newsletterForm').on('submit', function(event) {
                event.preventDefault(); // Empêche le rechargement de la page

                const email = $('#email').val();

                // Simule un appel AJAX pour l'inscription
                $('#responseMessage').text('Inscription en cours...').show();

                setTimeout(() => {
                    // Remplace par un vrai appel AJAX à votre serveur
                    $('#responseMessage').text(`Merci de vous être inscrit, ${email}!`).css('color', 'green');
                }, 2000);
            });
        });
    </script>
</body>
</html>
