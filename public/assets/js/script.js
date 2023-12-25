let btnPopup = document.querySelector(".js-open-popup");
let popup = document.querySelector(".callback-container");
document.addEventListener("click",function(evt) {
   if (evt.target.closest('.header__burger')) {
      document.querySelector(".header__burger").classList.toggle("active");
      document.querySelector(".header__nav").classList.toggle("active");
   }
   if (!evt.target.closest('.header__burger') && !evt.target.closest('.header__nav')) {
      if (document.querySelector(".header__burger.active")) {
         document.querySelector(".header__burger.active").classList.remove("active");
      }
      if (document.querySelector(".header__nav.active")) {
         document.querySelector(".header__nav.active").classList.remove("active");
      }
   }
   if (evt.target.closest('.js-open-popup')) {
      if (document.querySelector(".callback-container")) { 
         document.querySelector(".callback-container").classList.add("open");
      }
   }
   if (evt.target.closest('.close-btn')) {
      document.querySelector(".callback-container.open").classList.remove("open");
   }
   if (evt.target == document.querySelector(".callback-container.open")) {
      document.querySelector(".callback-container.open").classList.remove("open");
   } 
});
document.addEventListener('keyup', function (e) {
   let key = e.keyCode;
   if (key == 27) {
      if (document.querySelector(".callback-container.open")) {
         document.querySelector(".callback-container.open").classList.remove("open");
      }
   };
});

const swiper = new Swiper('.slider-swiper', {
   pagination: {
     el: '.swiper-pagination',
   },
   navigation: {
     nextEl: '.swiper-btn-next',
     prevEl: '.swiper-btn-prev',
   },
   grid: {
      fill: 'row',
      rows: 2,
   },
   breakpoints: {
      320: {
         spaceBetween: 10,
      },
      480: {
         spaceBetween: 15,
         grid: {
            fill: 'row',
            rows: 2,
         },
      },
      768: {
         grid: {
            fill: 'row',
            rows: 1,
         },
         spaceBetween: 15,
         slidesPerView: 2,
      },
   },
});
var swiper2 = new Swiper(".mySwiper", {
      spaceBetween: 5,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
 });
 var swiper3 = new Swiper(".mySwiper2", {
   spaceBetween: 10,
   pagination: {
      el: '.swiper-pagination',
    },
   thumbs: {
     swiper: swiper2,
   },
 });