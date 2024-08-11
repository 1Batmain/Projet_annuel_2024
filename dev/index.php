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
    <link rel="stylesheet" href="styles.css">

</head>

<body>
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


    </main>
    <?php include 'components/footer.php'; ?>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    </body>
</html>
