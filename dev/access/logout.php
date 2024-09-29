<?php
session_start(); // Démarre la session
session_destroy(); // Détruit la session

// Rediriger vers la page d'accueil ou une autre page
header("Location: ../index.php");
exit();
?>
