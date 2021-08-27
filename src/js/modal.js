$(document).ready(function () {
  var body = $("body");
  var background = $(".modal__background");
  var gaugeModal = $(".gauge-modal");
  var callbackModal = $(".callback-modal");

  function openModal(modal) {
    background.addClass("modal__background_active");
    modal.addClass("modal_active");
    body.addClass("opened-modal");
  }

  function closeModal() {
    var activeModal = $(".modal_active");

    background.removeClass("modal__background_active");
    activeModal.removeClass("modal_active");
    body.removeClass("opened-modal");
  }

  $("#gauge-btn").on("click", () => openModal(gaugeModal));
  $("#callback-btn").on("click", () => openModal(callbackModal));
  $(".gauge-close").on("click", () => closeModal());
  $(".callback-close").on("click", () => closeModal());
  $(".thanking-btn").on("click", () => closeModal());
  background.on("click", (e) => {
    if (e.target.className.split(" ")[0] === "modal__background") {
      closeModal();
    }
  });
});
