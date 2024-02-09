let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  

  // const swiper = new Swiper('.js-testimonials-slider', {
  //   grabCursor:true,
  //   spaceBetween:30,
  //   pagination:{
  //     el: '.js-testimonials-pagination',
  //     clickable:true
  //   },
  //   breakpoints:{
  //     767:{
  //       slidesPerView: 2
  //     }
  //   }



  // });

  document.addEventListener("DOMContentLoaded", function() {
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const boxContainer = document.querySelector(".box-container");

    let currentIndex = 0;

    nextBtn.addEventListener("click", function() {
        if (currentIndex < boxContainer.children.length - 3) {
            currentIndex++;
            updateSlider();
        }
    });

    prevBtn.addEventListener("click", function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    function updateSlider() {
        const boxes = boxContainer.children;
        for (let i = 0; i < boxes.length; i++) {
            if (i >= currentIndex && i < currentIndex + 3) {
                boxes[i].style.display = "block";
            } else {
                boxes[i].style.display = "none";
            }
        }
    }

    updateSlider();
});


  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for(var i = currentItem;i<currentItem+3;i++){
      boxes[i].style.display = 'inline-block';
    };

    currentItem += 3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
    }

  }