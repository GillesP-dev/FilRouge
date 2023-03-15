const dernierePeinture = document.querySelector("#dernierePeinture1");
const prenomAvis = document.querySelector("#prenom");
const avisAvis = document.querySelector("#avis");
const btnAvis = document.querySelector(".btnAvis");
const affichageAvis = document.querySelector(".affichageAvis");
const btnFermetuerPleinEcran = document.querySelector(".btnCloseTableau");
const tableauPleinEcran = document.querySelector(".pleinEcran");
let champAvis;
let champPrenomAvis;


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
   if(prenomAvis.value === ""||avisAvis.value === ""){alert("remplir tout les champs S.V.P")}else{
   recupAvis();}
   
   
 })
 
 function recupAvis() {
   champPrenomAvis = prenomAvis.value;
   champAvis = avisAvis.value;
   let d = new Date();
   let addZeroD;
   let addZero;
   if(d.getDate()<10){addZeroD = '0'}else{addZeroD = ''};
   if(d.getMonth()<10){addZero = '0'}else{addZero = ''};
   const divAvis = document.createElement("div");
   divAvis.classList.add("divAvis");
   const titreAvis = document.createElement("h4");
   titreAvis.textContent = champPrenomAvis;
   
   const paraAvis = document.createElement("p");
   paraAvis.textContent = champAvis +' ('+addZeroD+d.getDate()+'/'+addZero+(d.getMonth()+1)+')';
   affichageAvis.insertBefore(divAvis,affichageAvis.firstChild);
   divAvis.append(titreAvis);
   divAvis.append(paraAvis);
   prenomAvis.value = "";
   avisAvis.value = "";
   paraAvis.style.marginLeft = "10px";
 
 }