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

//📁 /assets/js/blocks  _footer.js
import {footerScrollUp, footerValidationEmail} from './blocks/_footer.js';

//📁 /assets/js/blocks  catalog.js
import {catalogPopups, checkNum} from './blocks/catalog.js';

//📁 /assets/js/blocks  sliders.js
import {sliderMain, sliderProductSpecial} from './blocks/sliders.js';

//📁 /assets/js/blocks  specialSample.js
import {specialSampleTabs} from './blocks/specialSample.js';

//📁 /assets/js/blocks  specialSample.js
import {mainGardenShow} from './blocks/showFull.js';

//📁 /assets/js/blocks  specialSample.js
import {mapInit} from './blocks/map.js';

//📁 /assets/js/blocks  scrollbar.js
import {mapAsideScroll} from './blocks/scrollbar.js';

document.addEventListener("DOMContentLoaded", function(){

    // open catalog in the header
    headerCatalog();

    // open contextual hint
    headerSearchelp()

    // slick slider main
    sliderMain();

    // slick slider main page special product
    sliderProductSpecial();

    // map
    mapInit();

    // tabs sliders in the main page section specialSample
    specialSampleTabs();

    // main garden show all
    mainGardenShow();

    // sroll page on top
    footerScrollUp();

    // validation e-mail
    footerValidationEmail();

    //open popups in catalog
    catalogPopups();

    //
    checkNum();

    // map aside scroll
    mapAsideScroll();
});

