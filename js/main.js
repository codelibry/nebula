import $  from 'jquery';

// import { lottie } from './lottie';

import { header } from './template-parts/header/header';

// Animations
import { appearence } from './animations/appearence';

// Blocks
import { videoBlock } from './template-parts/blocks/video';
import { scrollToTop } from './template-parts/blocks/scrollToTop';


// Parts
import { initPopups } from './parts/popups';
import { basicSliders } from './parts/slider';


header();

//animations
appearence();

//blocks
videoBlock();
scrollToTop()

// Parts
initPopups();
basicSliders();