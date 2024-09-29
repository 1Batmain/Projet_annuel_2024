<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-center" href="../dev/index.php">Vivafit</a>

        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/concept.php">Concept</a></li>
                <li class="nav-item"><a class="nav-link" href="../dev/pages/subs.php">Abonnements</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/clubs.php">Les clubs</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/forum.php">Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/boutique.php">Boutique</a></li>
            </ul>

            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) : ?>
                <!-- Si connecté -->
                <button type="button" class="btn btn-outline-success ml-auto mx-5">Mon Compte</button>
                <button type="button" class="btn btn-outline-success mx-2">Mon Panier</button>
                <form action="../dev/access/logout.php" method="post" style="display: inline;">
                    <button type="submit" class="btn btn-outline-danger mx-2">Se déconnecter</button>
                </form>
            <?php else : ?>
                <!-- Si non connecté -->
                <button type="button" class="btn btn-outline-primary ml-auto mx-5" id="monEspace" onclick="openModal('connexion')">Mon espace</button>
            <?php endif; ?>
        </div>
    </div>

    <!-- Navbar pour les écrans inférieur à lg -->
    <div id="menuLateral" class="menuLateral">
        <a href="javascript:void(0)" class='closebtn' onclick="closeNav()">&times;</a>
        <a class="nav-link" href="../dev/index.php">Accueil</a></li>
        <a class="nav-link" href="./pages/concept.php">Concept</a></li>
        <a class="nav-link" href="../dev/pages/subs.php">Abonnements</a></li>
        <a class="nav-link" href="./pages/clubs.php">Les clubs</a></li>
        <a class="nav-link" href="./pages/forum.php">Forum</a></li>
        <a class="nav-link" href="./pages/boutique.php">Boutique</a></li>
        
        <!-- Affichage conditionnel dans le menu latéral -->
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) : ?>
                <!-- Si connecté -->
                <button type="button" class="btn btn-outline-success ml-auto mx-2">Mon Compte</button>
                <button type="button" class="btn btn-outline-success mx-2">Mon Panier</button>
                <form action="../dev/access/logout.php" method="post" style="display: inline;">
                    <button type="submit" class="btn btn-outline-danger mx-2">Se déconnecter</button>
                </form>
            <?php else : ?>
                <!-- Si non connecté -->
                <button type="button" class="btn btn-outline-primary ml-auto mx-5" id="monEspace" onclick="openModal('connexion')">Mon espace</button>
            <?php endif; ?>
    </div>
    <div id="masqueFond" class="masqueFond"></div>
</nav>