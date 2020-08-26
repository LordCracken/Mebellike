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