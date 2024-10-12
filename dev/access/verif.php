<?php 
session_start(); 
require_once('database.php');
// Vérification de la présence des paramètres id et cle dans l'URL
if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['cle']) && !empty($_GET['cle'])) {
    // Récupération des valeurs id et cle
    $getid = $_GET['id'];
    $getcle = $_GET['cle'];

    // Préparation de la requête SQL pour récupérer les informations de l'utilisateur
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ? AND cle = ?');
    // Exécution de la requête avec les valeurs id et cle
    $recupUser->execute(array($getid, $getcle));

    // Si au moins une ligne est retournée (utilisateur trouvé)
    if($recupUser->rowCount() > 0) {
        // Récupération des informations de l'utilisateur
        $userInfo = $recupUser->fetch();

        // Si l'utilisateur n'est pas encore confirmé
        if ($userInfo['confirme'] != 1) {
            // Préparation de la requête SQL pour mettre à jour le statut de l'utilisateur
            $updateConfirmation = $bdd->prepare('UPDATE users SET confirme = ? WHERE id = ?');
            // Exécution de la requête avec la nouvelle valeur de confirmation (1) et l'id de l'utilisateur
            $updateConfirmation->execute(array(1, $getid));

            // Redirection vers la page index.php
            $_SESSION['cle'] = $getcle;
            header('Location: index.php');
        } else {
            // L'utilisateur est déjà confirmé, redirection
            $_SESSION['cle'] = $getcle;
            header('Location: index.php');
        }
    } else {
        // L'utilisateur n'a pas été trouvé
        echo "Votre clé ou identifiant est incorrect";
    }
} else {
    // Les paramètres id ou cle sont manquants
    echo "Aucun utilisateur trouvé";
}
?>