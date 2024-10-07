let previousModal = null;

function openModal(type) 
{

    // Ferme toutes les modales ouvertes
    document.querySelectorAll('.modal').forEach(function(modalElement) {
        var modalInstance = bootstrap.Modal.getInstance(modalElement);
        if (modalInstance) {
            modalInstance.hide();
        }
    });

    // Retire la classe active des deux boutons
    document.getElementById('btnConnexion').classList.remove('active');
    document.getElementById('btnInscription').classList.remove('active');

    var modalElement;
    if (type === 'connexion') {
        // Sélectionne la modale de connexion
        modalElement = document.getElementById('modalConnexion');
        // Ajouter la classe active au bouton Connexion (pour le surligner)
        document.getElementById('btnConnexion').classList.add('active');
	 // Stocke la modale actuellement active avant d'ouvrir le CAPTCHA
        previousModal = modalElement; // Récupère la modale actuellement affichée (connexion ou inscription)
    } else if (type === 'inscription') {
        // Sélectionne la modale d'inscription
        modalElement = document.getElementById('modalInscription');
        // Ajoute la classe active au bouton Inscription
        document.getElementById('btnInscription').classList.add('active');
	 // Stocke la modale actuellement active avant d'ouvrir le CAPTCHA
        previousModal = modalElement; // Récupère la modale actuellement affichée (connexion ou inscription)
    } else if (type === 'captcha') {

        // Sélectionne la modale captcha
        modalElement = document.getElementById('modalCaptcha');
        // Ajoute la classe active au bouton Captcha
        document.getElementById('btnCaptcha').classList.add('active');
    } else return;


    // Ouvrir la modale sélectionnée
    var modal = new bootstrap.Modal(modalElement);
    modal.show();
}

function closeCaptcha()
{
	if (previousModal == document.getElementById('modalConnexion'))
		openModal('connexion')
	else if (previousModal == document.getElementById('modalInscription'))
		openModal('inscription');
	else 
		openModal();
}
