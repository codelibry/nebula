import $ from "jquery";

function header() {
  $(document).ready(function () {
    var w = $(window).width();
    if (w < 1025) {
      var height = $(".hero").outerHeight();
      // $('.header__mobile').css('top', height);
    }
    $(".header__burger").click(function () {
      $(".header__mobileMenu").addClass("opened");
    });
    $(".header__burgerClose").click(function () {
      $(".header__mobileMenu").removeClass("opened");
    });

    $(window).scroll(function () {
      if ($(window).scrollTop() >= 50) {
        $(".header").addClass("top-scroll");
      } else {
        $(".header").removeClass("top-scroll");
      }
    });
  });
}

export { header };
