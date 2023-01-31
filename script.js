let dernierePeinture = document.querySelector("#dernierePeinture1");

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