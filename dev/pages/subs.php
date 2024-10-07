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
    <title>Abonnements</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles.css">
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
    <?php include '../components/navbar.php'; ?>
    <?php include '../components/fenetre_modale_inscription_connexion.php'; ?>

    <h1 class="text-center mt-4">Nos Abonnements</h1>

    <div class="container mt-5">
        <div class="row">
            <!-- Abonnement Classic -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Abonnement Classic</h5>
                        <p class="card-text">Accès à toutes les installations du gymnase.</p>
                        <p class="card-text"><strong>Prix : 29€/mois</strong></p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscriptionModal">Souscrire</a>
                    </div>
                </div>
            </div>
            
            <!-- Abonnement Gold -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Abonnement Gold</h5>
                        <p class="card-text">Accès à toutes les installations + cours collectifs illimités.</p>
                        <p class="card-text"><strong>Prix : 49€/mois</strong></p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscriptionModal">Souscrire</a>
                    </div>
                </div>
            </div>
            
            <!-- Abonnement Premium -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Abonnement Premium</h5>
                        <p class="card-text">Accès à toutes les installations + cours collectifs + suivi personnalisé.</p>
                        <p class="card-text"><strong>Prix : 69€/mois</strong></p>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subscriptionModal">Souscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour Souscription -->
    <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="subscriptionModalLabel">Formulaire de Souscription</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="paymentMethod" class="form-label">Moyen de Paiement</label>
                            <select class="form-select" id="paymentMethod" required>
                                <option value="" disabled selected>Sélectionnez un moyen de paiement</option>
                                <option value="cb">Carte Bancaire</option>
                                <option value="paypal">PayPal</option>
                            </select>
                        </div>
                        <div class="mb-3" id="cardDetails" style="display: none;">
                            <label for="cardNumber" class="form-label">Numéro de Carte Bancaire</label>
                            <input type="text" class="form-control" id="cardNumber" required>
                        </div>
                        <div class="mb-3" id="paypalDetails" style="display: none;">
                            <label for="paypalEmail" class="form-label">Email PayPal</label>
                            <input type="email" class="form-control" id="paypalEmail" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'; ?>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
    <script src="../script.js"></script>
    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            const cardDetails = document.getElementById('cardDetails');
            const paypalDetails = document.getElementById('paypalDetails');
            
            if (this.value === 'cb') {
                cardDetails.style.display = 'block';
                paypalDetails.style.display = 'none';
            } else if (this.value === 'paypal') {
                cardDetails.style.display = 'none';
                paypalDetails.style.display = 'block';
            } else {
                cardDetails.style.display = 'none';
                paypalDetails.style.display = 'none';
            }
        });
    </script>
</body>
</html>
