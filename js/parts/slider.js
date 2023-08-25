import $ from "jquery";
import "slick-carousel";

function basicSliders() {
  $(".testimonials").each(function () {
    let block = $(this);
    let slider = $(this).find(".testimonials__rows");

    slider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      // infinite: true,
      speed: 500,
      cssEase: "linear",
      adaptiveHeight: false,
      responsive: [
        {
          breakpoint: 586,
          settings: {
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    slider.on("init", function () {
      $(window).trigger("heightChanges");
    });
  });
}

export { basicSliders };
