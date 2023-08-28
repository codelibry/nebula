import $ from "jquery";

function scrollToTop() {
  var btn = $(".footer__goUpBtn");
  btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      "300"
    );
    $(".header").removeClass("top-scroll");
  });
}

export { scrollToTop };
