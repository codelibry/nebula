import $ from "jquery";

function readMore() {
  $(".caseStudies__readMore").click(function () {
    $(this)
      .parent()
      .find(".caseStudies__testimonialText")
      .toggleClass("opened");
  });
}

export { readMore };
