$('.p-hamburger-menu').click(function () {
  $('.p-hamburger-menu__line, .p-global-menu').toggleClass('is-open');
});

$(function () {
  $(window).on("scroll", function () {
    const sliderHeight = $(".l-header, .l-header--contact").height();
    if (sliderHeight - 90 < $(this).scrollTop()) {
      $(".l-header__bar").addClass("is-scrolled");
    }
    else {
      $(".l-header__bar").removeClass("is-scrolled");
    }
  })
});