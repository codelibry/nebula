import $ from "jquery";
import "slick-carousel";

function slider() {
  $(".caseStudies").each(function () {
    let block = $(this);
    let slider = block.find(".caseStudies__slider");

    slider.slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 900,
      cssEase: "linear",
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            arrows: false,
          },
        },
      ],
    });

    slider.on("init", function () {
      $(window).trigger("heightChanges");
    });

    $(".caseStudies__readMore").click(function () {
      event.preventDefault();
      console.log("click");
      $(this)
        .parent()
        .find(".caseStudies__sliderItem__text")
        .toggleClass("opened");
      $(this).hide();
    });
  });
}

export { slider };
