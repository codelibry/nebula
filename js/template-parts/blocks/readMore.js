import $ from "jquery";

function readMore() {
  $(".guidelines").each(function () {
    $(".guidelines__readMore").click(function () {
      $(this)
        .parent()
        .find(".guidelines__testimonialText")
        .toggleClass("opened");
    });
  });
}

export { readMore };
