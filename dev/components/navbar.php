<!-- Code de la navbar responsive, elle se transforme en menu quand l'ecran passe sous le breakpoint medium(lg) --> 

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-center " href="/index.php">FitForm</a>
<!-- Navbar pour les écrans superieurs à lg -->

        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" href="./index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/concept.php">Concept</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/abonnements.php">Abonnements</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/clubs.php">Les clubs</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/forum.php">Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="./pages/boutique.php">Boutique</a></li>
            </ul>
                <button type="button" class="btn btn-outline-primary ml-auto  mx-5" id="monEspace" onclick="openModal('connexion')">Mon espace</button>
        </div>
    </div>

<!-- Navbar pour les écrans inférieur à lg -->
        <div id="menuLateral" class="menuLateral">
                    
            <a href="javascript:void(0)" class='closebtn' onclick="closeNav()">&times;</a>
            <a class="nav-link" href="./index.php">Accueil <span class="sr-only">(actuel)</span></a>
            <a class="nav-link" href="./pages/concept.php">Concept</a>
            <a class="nav-link" href="./pages/abonnements.php">Abonnements</a>
            <a class="nav-link" href="./pages/clubs.php">Les clubs</a>
            <a class="nav-link" href="./pages/forum.php">Forum</a>
            <a class="nav-link" href="./pages/boutique.php">Boutique</a>
            <a class="nav-link" href="./access/inscription.php">Inscription</a>
            <a class="nav-link" href="./access/connexion.php">Connexion</a>
        </div>
        <div id="masqueFond" class="masqueFond"></div>
    </nav>
