function showTheme() {
    loadTheme();
  }
  
  function showContent() {
    document.body.style.visibility = 'visible';
    document.body.style.opacity = 1;
  }
  
  window.addEventListener('DOMContentLoaded', function () {
    showTheme();
    showContent();
  });

const changeThemeBtn = document.querySelector("#change-theme");

//toggle dark mode
function toggleDarkMode(){
    document.body.classList.toggle("dark");
}

//load light or dark mode
function loadTheme(){
    const darkMode = localStorage.getItem("dark");

    if(darkMode){
        toggleDarkMode();
    }

}

// loadTheme();

changeThemeBtn.addEventListener("change", function(){

    toggleDarkMode();

    //save or remove dark mode

    localStorage.removeItem("dark");

    if(document.body.classList.contains("dark")){
        localStorage.setItem("dark", 1);
    }

})

window.addEventListener('scroll', () => { 
    document.querySelector('nav').classList.toggle
    ('window-scroll',window.scrollY > 0)

})  

window.addEventListener('scroll', () => { 
    document.querySelector('#backToTopButton').classList.toggle
    ('show',window.scrollY > 0)

})  


var input = document.getElementById("capaDaHistoria")
var preview = document.getElementById("imgPreview")
input.addEventListener("input", () => {
  preview.src=input.value
})

var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



