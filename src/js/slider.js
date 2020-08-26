$(document).ready(function () {

  // Настройка слайдера для блока hero
  $('.hero-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.hero-nav',
    swipe: false
  });
  $('.hero-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.hero-slider',
    arrows: false,
    focusOnSelect: true
  });

  $('.promo__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.promo-slider-nav',
    swipe: false
  });
  $('.promo-slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.promo__slider',
    arrows: false,
    focusOnSelect: true
  });

  $('.comments__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    vertical: true,
    asNavFor: '.comments__select-bar',
    swipe: false
  });
  $('.comments__select-bar').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.comments__slider',
    arrows: false,
    focusOnSelect: true,
    vertical: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          vertical: false
        }
      },
      {
        breakpoint: 577,
        settings: {
          vertical: false,
          swipe: true,
          slidesToShow: 2
        }
      }
    ]
  });

});