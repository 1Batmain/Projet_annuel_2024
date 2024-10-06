<?php 
session_start(); 
require_once('access/log_util.php'); 
ajouterLog(isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null, isset($_SESSION['user_id']) ? 'Visite de la page' : 'Visite de la page sans connexion', basename($_SERVER['PHP_SELF'])); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Nom de la Salle de Sport</title>
        <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
-->
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./styles.css">

</head>

<body>
         <!-- Top Notification Bar -->
         <div id="banniere" class="bg-success text-white text-center py-1 d-flex justify-content-center align-items-center">
    <div class="ms-3">
        <span>🔥 Offre spéciale : Les 4 premières semaines à 19€</span>
    </div>
        <div class="me-3 position-absolute end-0">
        <button id="theme-toggle" class="btn btn-light me-3"  style=background-color:#198755;>🌙</button>
        <a href="../dev/access/register.php" class="text-white text-decoration-none me-3">S'INSCRIRE</a>
        <a href="#" class="text-white text-decoration-none">✕</a>

        </div>
    </div>
    <?php include 'components/navbar.php'; ?>
    <?php include 'components/fenetre_modale_inscription_connexion.php'; ?>

    <main>
        <!-- Premier Bloc Image avec le texte par dessus -->
        <div class='container-fluid'>
            <div class=" container p-0 shadow my-5 position-relative">
                <div class ='row'>
                        <h1 class= " z-1 position-absolute ms-5 mt-4 col-4 " >Dépasse toi et atteins tes <span>objectifs !</span>
                        <p class="lead ms-2 mt-3">Trouve ta salle la plus proche parmis plus de 280 clubs répartis sur toute la france !</p>
                        </h1>

                </div>
                <img src='images/salle.webp' class='img-fluid w-100 z-0 ' alt="imge d'une de nos salle">    
            </div>
        </div> 
        <!-- Deuxième Bloc Image à droite texte à gauche -->
        <div class='container-fluid'>
            <div class=" container p-0 shadow my-5 ">
                <div class ='row g-0 '>
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class ='row'>
                            <div class="px-5">
                                <div class="col-12">
                                    <h1 class= "" ><span> 7j/7 et 24h/24 !</span></h1>
                                </div>
                                <div class="col-12">
                                    <p class="lead mt-3">Avec ta carte FitForm tu as accès à toutes nos salles en France, Espagne et dans les Dom-Tom !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <img src='images/salle.webp' class='img-fluid w-100 h-100 col ' alt="imge d'une de nos salle" style='object-fit: cover;'>    
                        </div>
                </div>
            </div>
        </div> 

    <!-- Clubs Section -->
    <div class="clubs-section py-5">
        <div class="container text-center">
            <h2>294 Clubs de Sport</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a elementum leo.</p>
            <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-success mx-2">CLUBS EN QUARTIERS</a>
                <a href="#" class="btn btn-success mx-2">PROMOS</a>
            </div>
        </div>
    </div>

    <div class="container actualites-section">
    <div class="text-center section-title">
        <h2 class="font-weight-bold">ACTUALITÉS FITNESS PARK</h2>
        <p>DÉCOUVREZ NOS DERNIERS ARTICLES</p>
        <div class="underline mx-auto"></div>
    </div>

    <div class="row">
        <!-- Première carte -->
        <div class="col-md-4">
            <div class="card">
                <img src="./images/tout-savoir-sur-le-cheat-meal.jpg" class="card-img-top" alt="Article 1">
                <div class="card-body">
                    <h5 class="card-title">LE RECALIBRAGE MÉTABOLIQUE POUR RELANCER UNE PERTE DE POIDS ?</h5>
                    <p class="card-text">Par Naomi Garciau</p>
                    <div class="underline"></div>
                    <a href="#" class="btn btn-link">LIRE LA SUITE</a>
                </div>
            </div>
        </div>
        <!-- Deuxième carte -->
        <div class="col-md-4">
            <div class="card">
                <img src="./images/imageactu2.jpg" class="card-img-top" alt="Article 2">
                <div class="card-body">
                    <h5 class="card-title">OBTENIR UN 6 PACK VISIBLE : LA MÉTHODE APPROUVÉE PAR NASSIM SAHILI</h5>
                    <p class="card-text">Par Nassim Sahili</p>
                    <div class="underline"></div>
                    <a href="#" class="btn btn-link">LIRE LA SUITE</a>
                </div>
            </div>
        </div>
        <!-- Troisième carte -->
        <div class="col-md-4">
            <div class="card">
                <img src="./images/Vignette_Salade-couscous-1-550x550.jpg" class="card-img-top" alt="Article 3">
                <div class="card-body">
                    <h5 class="card-title">SALADE DE SEMOULE AUX LÉGUMES GRILLÉS</h5>
                    <p class="card-text">Par Naomi Garciau</p>
                    <div class="underline"></div>
                    <a href="#" class="btn btn-link">LIRE LA SUITE</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Newsletter Section -->
    <div class="newsletter-section py-5">
        <div class="container text-center">
            <h2>Ne ratez pas les dernières offres !</h2>
            <form action="newsletter.php" method="post" class="d-flex justify-content-center">
                <input type="email" name="email" class="form-control w-50" placeholder="Votre adresse mail" required>
                <button type="submit" class="btn btn-success">Je m'inscris !</button>
            </form>
        </div>
    </div>

<!-- Section 1 : Concept & App -->
<div class="container my-5" style="width: 60%;">
    <div class="row no-gutters">
        <div class="col-md-6 position-relative">
            <h3 class="image-title">Concept Vivafit</h3>
            <img src="./images/Sreen-lame-1.png" alt="Concept et App" class="img-fluid img-bordered">
        </div>
        <div class="col-md-6 position-relative">
            <h3 class="image-title">APP Vivafit</h3>
            <img src="./images/tout-savoir-sur-le-cheat-meal.jpg" alt="Homepark" class="img-fluid img-bordered">
        </div>
        <div class="col-md-6 position-relative">
            <h3 class="image-title">Vivafit ACTU'</h3>
            <img src="./images/Copie-de-041224_FitnessPark_Saint_Brice_Sous_Foret-06-2.jpg" alt="Gym" class="img-fluid img-bordered">
        </div>
        <div class="col-md-6 position-relative">
            <h3 class="image-title">Homepark</h3>
            <img src="./images/HP_Home_480x590_2.jpg" alt="Homepark" class="img-fluid img-bordered">
        </div>
    </div>
</div>

<!-- Section 2 : Form & CTA -->
<div class="container my-5 p-5 bg-dark text-white text-center">
    <h3 class="mb-3">PERTE DE POIDS, PRISE DE MASSE OU JUSTE REMISE EN FORME ?</h3>
    <p>Atteins ton objectif grâce à notre accompagnement personnalisé : recettes, trainings et astuces !</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Mon adresse mail" aria-label="Adresse email">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">JE M'INSCRIS !</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </main>
    <?php include 'components/footer.php'; ?>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>



    <script>
   
   // script pour changer le thème (temporaire)
   document.getElementById("theme-toggle").addEventListener("click", function () {
       document.body.classList.toggle("light-theme");
   
       if (document.body.classList.contains("light-theme")) {
           this.textContent = "🌙";
       } else {
           this.textContent = "☀️"; 
       }
   });
   
   </script>


    </body>
</html>

