// const flavoursContainer = document.getElementsByClassName('flavoursContainer');
// flavoursScrollWidth = flavoursContainer.scrollWidth;

// window.addEventListener('load', () => {
//   arrowLeft = document.querySelector(".arrow-left");
//   arrowRight = document.querySelector(".arrow-right");
//   arrowLeft.addEventListener('click', scrollLeft);
//   arrowRight.addEventListener('click', scrollRight);
//   function scrollLeft() {
//     flavoursContainer.scrollTo(flavoursContainer.scrollLeft - 200, 0);
//   }
  
//   function scrollRight() {
//     flavoursContainer.scrollTo(flavoursContainer.scrollRight + 200, 0);
//   }
  
// });

window.onload = function() {

document.querySelector('.burger-mobile').addEventListener('click', function(){
  modal = document.querySelector('.modal-burger');
  modal.classList.toggle('modal-burger-open');
})

window.addEventListener('click', function(event){
  //si la cible du clic ne correspond pas au dropdown 
  if(!event.target.matches('.burger-mobile')){
      //alors je ferme le menu de la dropdown
      document.querySelector('.modal-burger').classList.remove('modal-burger-open');
  };
});

}