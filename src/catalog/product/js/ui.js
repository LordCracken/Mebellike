$(document).ready(function () {

  // Работа кнопки бургер-меню в навбаре
  $('#menu-btn').on('click', function (e) {
    e.preventDefault;
    $('.drop').removeClass('drop_active');
    $(this).toggleClass('menu-btn_active');
    $('.nav-list').toggleClass('nav-list_active');
  });
  // Меню навбара
  $('.nav-list__item>.link').mouseenter(function () {
    $('.drop').addClass('drop_active');
  });
  $('.drop').mouseleave(function () {
    $('.drop').removeClass('drop_active');
  });
  // Таб в разделе "Описание товара"
  $('.product__description').on('click', function() {
    $(this).addClass('turn-on');
    $('.product__stats').removeClass('turn-on');
    $('.stats__text').removeClass('displayed');
    $('.description__text').addClass('displayed');
  });
  $('.product__stats').on('click', function() {
    $(this).addClass('turn-on');
    $('.product__description').removeClass('turn-on');
    $('.description__text').removeClass('displayed');
    $('.stats__text').addClass('displayed')
  });

  $('.minus-btn').click(function () {
    var count = $(this).next('.amount').val();
    count--;
    $(this).next('.amount').val(count);
  });

  $('.plus-btn').click(function () {
    var count = $(this).prev('.amount').val();
    count++;
    $(this).prev('.amount').val(count);
  });

});