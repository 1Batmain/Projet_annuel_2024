
function openNav(){

  document.getElementById("menuLateral").style.left="0";
  document.getElementById("masqueFond").style.width="100%";
  document.getElementById("masqueFond").classList.add("visible");
}

function closeNav(){

  document.getElementById("menuLateral").style.left="-250px";
  document.getElementById("masqueFond").style.width="0";
  document.getElementById("masqueFond").classList.remove("visible");

}

function openModal(type) {
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
    } else if (type === 'inscription') {
        // Sélectionne la modale d'inscription
        modalElement = document.getElementById('modalInscription');
        // Ajoute la classe active au bouton Inscription
        document.getElementById('btnInscription').classList.add('active');
    }

    // Ouvrir la modale sélectionnée
    var modal = new bootstrap.Modal(modalElement);
    modal.show();
}
