const dernierePeinture = document.querySelector("#dernierePeinture1");
const prenomAvis = document.querySelector("#prenom");
let champPrenomAvis;
const avisAvis = document.querySelector("#avis");
let champAvis;
const btnAvis = document.querySelector(".btnAvis");
const affichageAvis = document.querySelector(".affichageAvis")


dernierePeinture.addEventListener("click", ()=> {
   openFullscreen(); 
})
function openFullscreen() {
  if (dernierePeinture.requestFullscreen) {
    dernierePeinture.requestFullscreen();
  } else if (dernierePeinture.webkitRequestFullscreen) { /* Safari */
    dernierePeinture.webkitRequestFullscreen();
  } else if (dernierePeinture.msRequestFullscreen) { /* IE11 */
    dernierePeinture.msRequestFullscreen();
  }
} 
btnAvis.addEventListener("click", (event) => {
  event.preventDefault();
  recupAvis();
  
  
})

function recupAvis() {
  champPrenomAvis = prenomAvis.value;
  champAvis = avisAvis.value;
  const titreAvis = document.createElement("h4")
  titreAvis.textContent = champPrenomAvis;
  affichageAvis.append(titreAvis);
  const paraAvis = document.createElement("p");
  paraAvis.textContent = champAvis;
  affichageAvis.append(paraAvis);
  prenomAvis.value = "";
  avisAvis.value = "";
  paraAvis.style.marginLeft = "10px";

}
//----------------------- carousel -----------------------------//



