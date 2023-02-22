const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
const menuWrapper = document.querySelector('.menu-wrapper');
const hiddenMenu = document.querySelector('.main-menu');
const menuItem = document.querySelector('.menu-item a');
const widget = document.querySelector('.widget2');

const siteheader = document.querySelector('.site-header');
const sitemain = document.querySelector('.site-main');
const sitefooter = document.querySelector('.site-footer');


document.addEventListener("DOMContentLoaded", function() {
    
    defineMenu();
    if(localStorage.getItem('gray') === 'active'){
        console.log('es gray on reload');
        siteheader.classList.add("grayscale");
        sitemain.classList.add("grayscale");
        sitefooter.classList.add("grayscale");
    }
   
});

//*Menu Desktop: define menu depending on width at loading page */

function defineMenu() {
    if (screen.width < 1000){
        hiddenMenu.classList.add('visually-hidden');
        menuWrapper.classList.add('burguer');

    }else{
        hiddenMenu.classList.remove('visually-hidden');
        menuWrapper.classList.remove('burguer');
    }
}

// Hamburguer Menu Funcionality
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuBtn.setAttribute("aria-label", "Close the menu");
        menuOpen = true;
        menuWrapper.classList.add('open');
        hiddenMenu.classList.remove('visually-hidden');
    } else {
        hiddenMenu.classList.add('visually-hidden');
        menuWrapper.classList.remove('open');
        menuBtn.classList.remove('open');
        menuBtn.setAttribute("aria-label", "Open the menu");
        menuOpen = false;


    }
});



// Set type of menu depending on width on window resizing

jQuery(window).resize(function(){
   if(jQuery(window).width() >= 1000){
     hiddenMenu.classList.remove('visually-hidden');
     menuWrapper.classList.remove('burguer');
      
   }else {
    hiddenMenu.classList.add('visually-hidden');
    menuWrapper.classList.add('burguer');
 }
})        

let gray;
//Widget funcionality

jQuery(".widget2").click(function(){

    jQuery(".site-header").toggleClass("grayscale");
    jQuery(".site-main").toggleClass("grayscale");
    jQuery(".site-footer").toggleClass("grayscale");
    if( siteheader.classList.contains("grayscale")){
        localStorage.setItem("gray", "active");

    } else {
        localStorage.setItem("gray", "");
    }
    });


