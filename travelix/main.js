//Selectors
let header = document.querySelector('.header');
let hamburgerMenu = document.querySelector('.hamburger-menu');
/*Attaches event listener to the window object
  to track scroll position then changes header
  styles based on the position*/
window.addEventListener('scroll', function () {
    //If scroll position is greater than 0 then toggle class
    let windowPosition = window.scrollY > 0;
    header.classList.toggle('active', windowPosition);
})
//Toggles on and off the menu-open class on the header
//when clicking the open/close menu icon to show or hide
//the mobile navigation
hamburgerMenu.addEventListener('click', function () {
    header.classList.toggle('menu-open');
})