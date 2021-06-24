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

//📁 /assets/js/blocks  _header.js
import {headerCatalog, headerSearchelp} from './blocks/_header.js';

//📁 /assets/js/blocks  sliders.js
import {sliderMain, sliderProductSpecial} from './blocks/sliders.js';

//📁 /assets/js/blocks  specialSample.js
import {specialSampleTabs} from './blocks/specialSample.js';

document.addEventListener("DOMContentLoaded", function(){

    // open catalog in the header
    headerCatalog();

    // open contextual hint
    headerSearchelp()

    // slick slider main
    sliderMain();

    // slick slider main page special product
    sliderProductSpecial();

    // tabs sliders in the main page section specialSample
    specialSampleTabs();

});

