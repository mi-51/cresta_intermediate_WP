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

$(function() {
  $('.l-header').bgSwitcher({
    images: [
      '../img/fv-bgi_01@2x.jpg',
      '../img/fv-bgi_02@2x.jpg',
      '../img/fv-bgi_03@2x.jpg'],
    effect: "drop",
    interval: "3000",
    easing: "swing"
  });
});