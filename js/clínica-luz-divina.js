 //Js animation SVG by Espinoza Dextre
$("#letrasMP").addClass("active");  
setTimeout(function(){        
    $("#letrasC").addClass("active"); 
}, 300);  
setTimeout(function(){        
    $(".pathFillletter").addClass("active"); 
}, 500); 
setTimeout(function(){
    $("#letrasMP").addClass("activeback");
    $("#letrasC").addClass("activeback"); 
    $(".pathFillletter").addClass("activeback");
},1800);
setTimeout(function(){
    $(".preload").addClass("active");
}, 2800);

 //add banner info
setTimeout(function(){
    $(".banner__title").addClass("active");
}, 3500);

$(".mobileIcon").on("click", function(){
    $(".menuFixedsMobile").addClass("active");
});
$(".closeMenuMobile").on("click", function(){
    $(".menuFixedsMobile").removeClass("active");
});


function scrollAnimated(){
    var lastScrollTop = 0, delta = 20;
    $(window).on('scroll',function(){
    var nowScrollTop = $(this).scrollTop();
    if (nowScrollTop > 50){
        $('header').addClass('animated');
    } else {
        $('header').removeClass('animated');
    }
    });
}
scrollAnimated();

//JS Slider By Espinoza Dextre
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function updateSlider() {
    const slider = document.getElementById('slider');
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function moveSlide(step) {
    currentIndex = (currentIndex + step + totalSlides) % totalSlides;
    updateSlider();
}

// Inicializa el slider
updateSlider();
