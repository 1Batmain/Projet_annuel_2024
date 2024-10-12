// Script pour changer le thème (temporaire)
document.getElementById("theme-toggle").addEventListener("click", function () {
  document.body.classList.toggle("light-theme");

  // Met à jour l'icône selon le thème actuel
  this.textContent = document.body.classList.contains("light-theme") ? "🌙" : "☀️";
});

// Fonction pour ouvrir le menu latéral
function openNav() {
  const menuLateral = document.getElementById("menuLateral");
  const masqueFond = document.getElementById("masqueFond");

  if (menuLateral && masqueFond) {
      menuLateral.style.left = "0";
      masqueFond.style.width = "100%";
      masqueFond.classList.add("visible");
  }
}

// Fonction pour fermer le menu latéral
function closeNav() {
  const menuLateral = document.getElementById("menuLateral");
  const masqueFond = document.getElementById("masqueFond");

  if (menuLateral && masqueFond) {
      menuLateral.style.left = "-250px";
      masqueFond.style.width = "0";
      masqueFond.classList.remove("visible");
  }
}

/* 
// Commentaire : Fonction de soumission du quiz
function submitQuiz() {
  const form = document.getElementById('quizForm');
  const formData = new FormData(form);
  const correctAnswers = JSON.parse(form.dataset.correct || '[]');
  let score = 0;

  formData.forEach((value, key) => {
      const questionIndex = key.split('_')[1];
      if (value === correctAnswers[questionIndex]) {
          score++;
      }
  });

  document.getElementById('result').innerText = `Vous avez obtenu un score de ${score} / ${correctAnswers.length}`;
  form.style.display = 'none';
} 
*/
