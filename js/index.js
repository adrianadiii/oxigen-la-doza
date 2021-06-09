// NAVIGATION
// const toggleButton= document.getElementsByClassName('navbar')[0];
// const navbarLinks= document.getElementsByClassName('navbar-links')[0];

// toggleButton.addEventListener('click',()=>{
//   navbarLinks.classList.toggle('active');
// })

const room  = document.querySelector('.navbar-links');
const btns = document.querySelectorAll('.btn'); 

room.addEventListener('click', e => {

 btns.forEach(btn => {

    if(btn.getAttribute('id') === e.target.getAttribute('id'))
      btn.classList.add('active');
    else
      btn.classList.remove('active');
    });
});




//IMAGE SLIDER


let currentSlide = 0;
const slides = document.querySelectorAll(".slide")
const dots = document.querySelectorAll('.dot')

const init = (n) => {
  slides.forEach((slide, index) => {
    slide.style.display = "none"
    dots.forEach((dot, index) => {
      dot.classList.remove("active")
    })
  })
  slides[n].style.display = "block"
  dots[n].classList.add("active")
}
document.addEventListener("DOMContentLoaded", init(currentSlide))
const next = () => {
  currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
  init(currentSlide)
}

const prev = () => {
  currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
  init(currentSlide)
}

document.querySelector(".next").addEventListener('click', next)

document.querySelector(".prev").addEventListener('click', prev)


setInterval(() => {
  next()
}, 10000);

dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    console.log(currentSlide)
    init(i)
    currentSlide = i
  })
})



//SCROLL JS

$(document).ready(function(){
  //Check if it's ready
$('a[href^="#"]').on('click',function (e) {
  
  e.preventDefault();
  
  var target = this.hash;
  var $target = $(target);
  
  $('html, body').animate({
      'scrollTop': $target.offset().top}
      , 2000, 'swing', function() {
      window.location.hash = target;
  });
                          
  }); 
  
});



// ANIMATIONS

const header = document.querySelector("header");
const sectionOne = document.querySelector(".about-product");

const faders = document.querySelectorAll(".fade-in");
const sliders = document.querySelectorAll(".slide-in");

const sectionOneOptions ={
  rootMargin: "-200px 0px 0px 0px"
};


const sectionOneObserver = new IntersectionObserver(function(
  entries,
  sectionOneObserver
) {
    entries.forEach(entry =>{
      if(!entry.isIntersecting){
        header.classList.add("nav-scrolled");
      } else {
        header.classList.remove(".nav-scrolled");
      }
    });
  },
  sectionOneOptions);
  
  sectionOneObserver.observe(sectionOne);

const appearOptions ={
  threshold: 0,
  rootMargin: "0px 0px -250px 0px"
};

const appearOnScroll = new IntersectionObserver(function(
  entries,
  appearOnScroll
) {
    entries.forEach(entry => {
      if(!entry.isIntersecting){
        return;
      } else {
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
      }
    });
},
appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});

sliders.forEach(slider=>{
  appearOnScroll.observe(slider);
});


// READ MORE FUNCTION


$(document).ready(function(){
  $(".read").click(function(){
    $(this).prev().toggle();
    $(this).siblings('.dots').toggle();
    if($(this).text()=='Citeste mai putin'){
      $(this).text('Citeste mai mult');
    } else{
      $(this).text('Citeste mai putin');
    }
  });
})

