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

}

