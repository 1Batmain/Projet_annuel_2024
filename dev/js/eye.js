document.addEventListener("DOMContentLoaded", function () {
  feather.replace();

  // Récupère tous les champs de mot de passe et leurs icônes
  const passwordFields = document.querySelectorAll(".passvue");

  passwordFields.forEach((field) => {
    const eye = field.parentElement.querySelector(".eye");
    const eyeoff = field.parentElement.querySelector(".eye-off");

    // Vérifier si eye et eyeoff existent avant d'ajouter des écouteurs d'événements
    if (eye && eyeoff) {
      // Écouteur d'événements pour l'icône "œil"
      eye.addEventListener("click", () => {
        eye.style.display = "none";
        eyeoff.style.display = "block";
        field.type = "text"; // Afficher le mot de passe
      });

      // Écouteur d'événements pour l'icône "œil barré"
      eyeoff.addEventListener("click", () => {
        eyeoff.style.display = "none";
        eye.style.display = "block";
        field.type = "password"; // Masquer le mot de passe
      });
    }
  });
});
