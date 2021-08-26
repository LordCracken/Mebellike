// Валидация форм
$(document).ready(function () {

  $("#gauge-form").validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: "required"
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: jQuery.validator.format("Введите не меньше {0} символов"),
        maxlength: jQuery.validator.format("Введите не больше {0} символов")
      },
      phone: {
        required: "Заполните поле"
      }
    },
    submitHandler: function (form) {
      form.submit();
      $('.gauge__input').val('');
      $('.modal__background').addClass('modal__background_active');
      $('.thanking-block').addClass('modal_active');
    }
  });
  $("#gauge-modal-form").validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: "required"
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: jQuery.validator.format("Введите не меньше {0} символов"),
        maxlength: jQuery.validator.format("Введите не больше {0} символов")
      },
      phone: {
        required: "Заполните поле"
      }
    },
    submitHandler: function (form) {
      form.submit();
      $('.gauge__input').val('');
      $('.gauge-modal').removeClass('modal_active');
      $('.thanking-block').addClass('modal_active');
    }
  });
  $("#callback-form").validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
      username: {
        required: true,
        minlength: 2,
        maxlength: 15
      },
      phone: "required"
    },
    messages: {
      username: {
        required: "Заполните поле",
        minlength: jQuery.validator.format("Введите не меньше {0} символов"),
        maxlength: jQuery.validator.format("Введите не больше {0} символов")
      },
      phone: {
        required: "Заполните поле"
      }
    },
    submitHandler: function (form) {
      form.submit();
      $('.callback__input').val('');
      $('.callback-modal').removeClass('modal_active');
      $('.thanking-block').addClass('modal_active');
    }
  });
  var phoneInputs = document.querySelectorAll(".input-phone");
  phoneInputs.forEach((input) => {
    IMask(input, {
      mask: "+{7} (000) 000-00-00",
    });
  });
});