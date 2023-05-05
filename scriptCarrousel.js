document.addEventListener( 'DOMContentLoaded', function () {
         
    
        
  var thumbnails = new Splide( '#thumbnail-carousel', {
    fixedWidth  : 200,
    fixedHeight : 120,
    gap         : 10,
    rewind      : true,
    pagination  : false,
    isNavigation: true,
    breakpoints : {
      600: {
        fixedWidth : 60,
        fixedHeight: 44,
      },
    },
  } );
  thumbnails.mount();
} );
const el = document.querySelectorAll(".splide__slide");
el.forEach(element => {
  element.addEventListener("click",(event)=>{
  
  const srcImage = event;
     let sourceImage = srcImage.target.getAttribute("src");
     document.querySelector("#imagegrande").setAttribute("src",sourceImage);
     
 })
}); 