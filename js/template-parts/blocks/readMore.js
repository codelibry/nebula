import $ from "jquery";

function readMore() {
  $(".guidelines").each(function () {
    $(".guidelines__readMore").click(function () {
      $(this)
        .parent()
        .find(".guidelines__testimonialText")
        .toggleClass("opened");
      $(this).hide();
    });
  });
  $(".services").each(function () {
    $(".services__text__readMore").click(function () {
      $(this).parent().find(".services__text").toggleClass("opened");
      $(this).hide();
    });
  });
  $(".letsWork").each(function () {
    $(".letsWork__text__readMore").click(function () {
      $(this).parent().find(".letsWork__text").toggleClass("opened");
      $(this).hide();
    });
  });
}

export { readMore };
