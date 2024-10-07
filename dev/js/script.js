// script pour changer le thème (temporaire)
document.getElementById("theme-toggle").addEventListener("click", function () {
document.body.classList.toggle("light-theme");

if (document.body.classList.contains("light-theme")) {
   this.textContent = "🌙";
} else {
   this.textContent = "☀️"; 
}
});

function openNav(){

  document.getElementById("menuLateral").style.left="0";
  document.getElementById("masqueFond").style.width="100%";
  document.getElementById("masqueFond").classList.add("visible");
}

function closeNav(){

  document.getElementById("menuLateral").style.left="-250px";
  document.getElementById("masqueFond").style.width="0";
  document.getElementById("masqueFond").classList.remove("visible");

  
  
  
  // quiz
  function submitQuiz() {
    const form = document.getElementById('quizForm');
    const formData = new FormData(form);
    const correctAnswers = JSON.parse(document.getElementById('quizForm').dataset.correct);
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
