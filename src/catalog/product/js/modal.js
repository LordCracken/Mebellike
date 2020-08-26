$(document).ready(function() {

  $('#gauge-btn').on('click', function() {
    $('.modal__background').addClass('modal__background_active');
    $('.gauge-modal').addClass('modal_active');
  });
  $('#callback-btn').on('click', function() {
    $('.modal__background').addClass('modal__background_active');
    $('.callback-modal').addClass('modal_active');
  });
  $('.gauge-close').on('click', function() {
    $('.modal__background').removeClass('modal__background_active');
    $('.gauge-modal').removeClass('modal_active');
  });
  $('.callback-close').on('click', function() {
    $('.modal__background').removeClass('modal__background_active');
    $('.callback-modal').removeClass('modal_active');
  });
  $('.thanking-btn').on('click', function() {
    $('.modal__background').removeClass('modal__background_active');
    $('.thanking-block').removeClass('modal_active');
  }); 

});