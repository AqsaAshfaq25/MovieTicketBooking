<<<<<<< Updated upstream
// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach((item) =>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Main Toggel
let toggel = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let userData = document.querySelector(".navigation ul li a .icon .ion-icon");
// let hover = document.querySelector(".navigation ul li");

toggel.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
    userData.classList.toggle("active");
    // hover.classList.toggle("active");
}
=======
jQuery(document).ready(function($) {
    tab = $('.tabs h3 a');
  
    tab.on('click', function(event) {
      event.preventDefault();
      tab.removeClass('active');
      $(this).addClass('active');
  
      tab_content = $(this).attr('href');
      $('div[id$="tab-content"]').removeClass('active');
      $(tab_content).addClass('active');
    });
  });
>>>>>>> Stashed changes
