import $ from "jquery";

// import { lottie } from './lottie';
import {
  scrollToAnchor,
  scrollToHash,
  requestQuoteLink,
} from "./animations/scroll-to-anchor";
import { header } from "./template-parts/header/header";

// Animations
import { appearence } from "./animations/appearence";

// Blocks
import { videoBlock } from "./template-parts/blocks/video";
import { scrollToTop } from "./template-parts/blocks/scrollToTop";
import { readMore } from "./template-parts/blocks/readMore";
import { slider } from "./template-parts/blocks/caseStudies_slider";

// Parts
import { initPopups } from "./parts/popups";
import { basicSliders } from "./parts/slider";

scrollToAnchor();
scrollToHash();
header();

//animations
appearence();

//blocks
videoBlock();
scrollToTop();
readMore();
slider();

// Parts
initPopups();
basicSliders();
