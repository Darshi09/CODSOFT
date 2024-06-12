let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginform = document.querySelector('.login-form-container');
let formclose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

window.onscroll = () => {
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginform.classList.remove('active');
};

menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () => {
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () => {
    loginform.classList.add('active');
});

formclose.addEventListener('click', () => {
    loginform.classList.remove('active');
});



var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});



let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem=3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (var i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'inline-block';
    }
    currentItem +=3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display = 'none';
    }
}

let wrapper = document.querySelector('.wrapper');
let slides = document.querySelectorAll('.slide');
let currentIndex = 0;

function showNextSlide() {
    currentIndex++;
    if (currentIndex >= slides.length) {
        currentIndex = 0;
    }
    wrapper.style.transform = `translateX(-${currentIndex * 120}px)`;
}

setInterval(showNextSlide, 2000); 

$(document).ready(function() {
    $('search-bar').click(function() {
        let destination = $('package.php').val();
        $.ajax({
            url: 'search.php',
            type: 'GET',
            data: { destination: destination },
            success: function(data) {
                $('#results').html(data);
            }
        });
    });
});
function showMessage() {
    document.getElementById("message").style.display = "block";
}