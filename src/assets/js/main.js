//📁 /node_modules/  jquery 3.5.1
import $ from 'jquery';
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import 'slick-carousel';

//📁 /node_modules/  magnific-popup 1.1.0
import 'magnific-popup';

//📁 /node_modules/  nouislider 14.6.2
import noUiSlider from 'nouislider';
global.noUiSlider = noUiSlider;

//📁 /assets/js/blocks  _sliders.js
import {sliderMain} from './blocks/sliders.js';

import {headerCatalog, headerSearchelp} from './blocks/_header.js';

document.addEventListener("DOMContentLoaded", function(){
    // slick slider main
    sliderMain();
    headerCatalog();
    headerSearchelp()
});

