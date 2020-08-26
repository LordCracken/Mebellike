$(document).ready(function () {

  $('.product__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.product__nav',
    prevArrow: $('.prev-arrow'),
    nextArrow: $('.next-arrow')
  });
  $('.product__nav').slick({
    slidesToShow: 3,
    focusOnSelect: true,
    asNavFor: '.product__slider',
    useTransform: false
  });

});