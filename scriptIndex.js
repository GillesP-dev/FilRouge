const dernierePeinture = document.querySelector("#dernierePeinture1");
const prenomAvis = document.querySelector("#prenom");
let champPrenomAvis;
const avisAvis = document.querySelector("#avis");
let champAvis;

const btnAvis = document.querySelector(".btnAvis");
const affichageAvis = document.querySelector(".affichageAvis");
const btnFermetuerPleinEcran = document.querySelector(".btnCloseTableau");
const tableauPleinEcran = document.querySelector(".pleinEcran");
console.log(dernierePeinture);


//---------------------full sceen peinture---------------------------------//
dernierePeinture.addEventListener("click", ()=> {
  // openFullscreen()
 tableauPleinEcran.style.display = "flex"      
 });
 btnFermetuerPleinEcran.addEventListener("click", ()=> {
  tableauPleinEcran.style.display = "none" 
 })
//  function openFullscreen() {
//    if (dernierePeinture.requestFullscreen) {
//      dernierePeinture.requestFullscreen();
//    } else if (dernierePeinture.webkitRequestFullscreen) { /* Safari */
//      dernierePeinture.webkitRequestFullscreen();
//    } else if (dernierePeinture.msRequestFullscreen) { /* IE11 */
//      dernierePeinture.msRequestFullscreen();
//    }
//  } 
 
 //---------------------Affichage des avis-----------------------------------//
 btnAvis.addEventListener("click", (event) => {
   event.preventDefault();
   recupAvis();
   
   
 })
 
 function recupAvis() {
   champPrenomAvis = prenomAvis.value;
   champAvis = avisAvis.value;
   let d = new Date();
   let addZero;
   if(d.getDate()<10){addZero = '0'}else {addZero = ''};
   if(d.getMonth()<10){addZero = '0'}else {addZero = ''};
   const divAvis = document.createElement("div");
   divAvis.classList.add("divAvis");
   const titreAvis = document.createElement("h4");
   titreAvis.textContent = champPrenomAvis;
   
   const paraAvis = document.createElement("p");
   paraAvis.textContent = champAvis +' ('+addZero+d.getDate()+'/'+addZero+(d.getMonth()+1)+')';
   affichageAvis.insertBefore(divAvis,affichageAvis.firstChild);
   divAvis.append(titreAvis);
   divAvis.append(paraAvis);
   prenomAvis.value = "";
   avisAvis.value = "";
   paraAvis.style.marginLeft = "10px";
 
 }