import $ from "jquery";
import { gsap } from "gsap";

function scrollToAnchor() {
  $(
    'a[href^="#"]:not(.slider-arrow, .quote--button, .footer__goUpBtn a)'
  ).click(function (e) {
    e.preventDefault();
    let href = $(this).attr("href");
    console.log("click");
    $("html, body").animate({ scrollTop: $(href).offset().top - 160 }, 1000);
  });
}

function scrollToHash() {
  let hash = window.location.hash.substr(1);
  if (hash && $("#" + hash).length) {
    $("html, body").animate(
      { scrollTop: $("#" + hash).offset().top - 160 },
      1000
    );
    $(window).on("carouselInited", function () {
      $("html, body").animate(
        { scrollTop: $("#" + hash).offset().top - 160 },
        1000
      );
    });
  }
}

function requestQuoteLink() {
  $(".quote--button").on("click", function (e) {
    e.preventDefault();

    let quoteTarget = $(this).attr("href");
    let pathArray = window.location.origin + "/#request_a_quote";

    if ($(quoteTarget).length) {
      $("html, body").animate(
        { scrollTop: $(quoteTarget).offset().top - 160 },
        1000
      );
    } else {
      window.location.href = pathArray;
    }
  });
}

export { scrollToAnchor, scrollToHash, requestQuoteLink };
