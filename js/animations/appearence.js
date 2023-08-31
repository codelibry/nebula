import $ from "jquery";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function appearence() {
  $(".animate").each(function () {
    let el = $(this);
    let disabled = false;
    gsap.from(el, {
      scrollTrigger: {
        trigger: el,
        pin: false,
        start: "top 80%",
        end: "bottom 20%",
        scrub: 1,
        markers: false,
        onToggle: function (self) {
          if (self.isActive && !disabled) {
            el.addClass("in");

            self.disable();
            disabled = true;
          } else {
            self.disable();
          }
        },
      },
    });
  });
  $(".animate-in-out").each(function () {
    let el = $(this);
    let disabled = false;
    gsap.from(el, {
      scrollTrigger: {
        trigger: el,
        pin: false,
        start: "top 80%",
        end: "bottom bottom",
        scrub: 1,
        markers: false,
        toggleClass: "active",
        // onToggle: function(self){
        //     if(self.isActive && !disabled){

        //         el.addClass('in');

        //         // self.disable();
        //         // disabled = true;
        //     } else{
        //         // self.disable();
        //         el.addClass('in');
        //         el.addClass('out');
        //     }
        // },
      },
      bottom: 0,
    });
  });
  $(".animate-now").each(function () {
    let el = $(this);
    let disabled = false;
    gsap.from(el, {
      scrollTrigger: {
        trigger: el,
        pin: false,
        start: "top bottom",
        end: "bottom top",
        scrub: 1,
        markers: false,
        onToggle: function (self) {
          if (self.isActive && !disabled) {
            el.addClass("in");

            self.disable();
            disabled = true;
          } else {
            self.disable();
          }
        },
      },
    });
  });

  function animateFrom(elem, direction) {
    direction = direction || 1;
    var x = 0,
      y = direction * 100;
    if (elem.classList.contains("gs_reveal_fromLeft")) {
      x = -200;
      y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
      x = 200;
      y = 0;
    }
    elem.style.transform = "translate(" + x + "px, " + y + "px)";
    elem.style.opacity = "0";
    gsap.fromTo(
      elem,
      { x: x, y: y, autoAlpha: 0 },
      {
        duration: 4.25,
        x: 0,
        y: 0,
        autoAlpha: 1,
        ease: "expo",
        overwrite: "auto",
      }
    );
  }

  function hide(elem) {
    gsap.set(elem, { autoAlpha: 0 });
  }

  document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
      hide(elem); // assure that the element is hidden when scrolled into view

      ScrollTrigger.create({
        trigger: elem,
        markers: false,
        start: "top 90%",
        end: "bottom 10%",
        onEnter: function () {
          animateFrom(elem);
        },
        onEnterBack: function () {
          animateFrom(elem, -1);
        },
        onLeave: function () {
          hide(elem);
        }, // assure that the element is hidden when scrolled into view
      });
    });
  });
}

export { appearence };
