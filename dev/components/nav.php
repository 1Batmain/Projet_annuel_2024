<?php
session_start();
?>
<nav>
    <ul>
        <li><a href="../index.php">Accueil</a></li>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <li><a href="../pages/compte.php">Mon Compte</a></li>
            <li><a href="../pages/panier.php">Mon Panier</a></li>
            <li><a href="../access/logout.php">Déconnexion</a></li>
        <?php else: ?>
            <li><a href="../access/login.php">Connexion</a></li>
            <li><a href="../access/register.php">Inscription</a></li>
        <?php endif; ?>
    </ul>
</nav>
