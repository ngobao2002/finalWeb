/**First slider */
$('.slider-one')
.not(".slick-intialized")
.slick({
    autoplay: true,
    autoplaySpeed:3000,
    dots: true,
    prevArrow:".site-slider .slider-btn .prev",
    nextArrow:".site-slider .slider-btn .next",
});

var swiper = new Swiper(".games", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 40,
      },
    },
  });