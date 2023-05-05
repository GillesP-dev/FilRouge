

const btnBurger = document.querySelector(".hamburger");
const fenetreBurger = document.querySelector(".fenetreBurger");
const btnClose = document.querySelector(".close");


//------------------------btn hamburger-----------------------------------//
btnBurger.addEventListener("click", (event) => {
  fenetreBurger.style.right = 0; 
  
});
btnClose.addEventListener("click", (event) => {
  fenetreBurger.style.right = "-150px"; 
})





