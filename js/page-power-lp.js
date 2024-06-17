jQuery(function ($) {
  $('.js-power-lp-faq-question').on('click', function () {
      $(this).next().slideToggle();
      $(this).toggleClass('is-open');
  });
});