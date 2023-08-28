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

    $(".header_switcher").click(function () {
      // $("body").toggleClass("dark_mode");
      // $(".light").toggleClass("on");
      // $(".dark").toggleClass("on");
    });

    // theme mode btn function
    function changeThemeMode() {
      const modeBtn = $(".header_switcher");
      const rootElem = document.documentElement;
      let storedColorScheme = localStorage.getItem("colorScheme");

      if (
        storedColorScheme === "dark" &&
        window.matchMedia &&
        window.matchMedia("(prefers-color-scheme: dark)").matches
      ) {
        rootElem.setAttribute("data-theme", "dark");
        modeBtn.addClass("dark-theme");
        $("body").addClass("dark_mode");
        $(".dark").addClass("on");
        $(".light").removeClass("on");
      } else if (storedColorScheme === "dark") {
        rootElem.setAttribute("data-theme", "dark");
        modeBtn.addClass("dark-theme");
        $("body").addClass("dark_mode");
        $(".dark").addClass("on");
        $(".light").removeClass("on");
      } else {
        rootElem.setAttribute("data-theme", "light");
        modeBtn.addClass("light-theme");
        $(".light").addClass("on");
        $(".dark").removeClass("on");
        $("body").removeClass("dark_mode");
      }

      modeBtn.on("click", function () {
        storedColorScheme = localStorage.getItem("colorScheme");
        if (storedColorScheme === "dark") {
          rootElem.setAttribute("data-theme", "light");
          modeBtn.addClass("light-theme");
          modeBtn.removeClass("dark-theme");
          localStorage.setItem("colorScheme", "light");
          $("body").removeClass("dark_mode");
          $(".light").addClass("on");
          $(".dark").removeClass("on");
        } else {
          rootElem.setAttribute("data-theme", "dark");
          modeBtn.addClass("dark-theme");
          modeBtn.removeClass("light-theme");
          localStorage.setItem("colorScheme", "dark");
          $("body").addClass("dark_mode");
          $(".dark").addClass("on");
          $(".light").removeClass("on");
        }
      });
    }

    changeThemeMode();
  });
}

export { header };
