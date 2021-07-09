//📁 /node_modules/  jquery 3.5.1
import $ from "jquery";
global.jQuery = global.$ = $;

//📁 /node_modules/  slick 1.8.1
import "slick-carousel";

//📁 /node_modules/  magnific-popup 1.1.0
import "magnific-popup";

//📁 /node_modules/  nouislider 14.6.2
import noUiSlider from "nouislider";
global.noUiSlider = noUiSlider;

//📁 /assets/js/blocks  _header.js
import {
    headerCatalog,
    headerSearchelp,
    headerClick,
    headerScroll,
    headerOpenClient
} from "./blocks/_header.js";

//📁 /assets/js/blocks  _footer.js
import { footerScrollUp, footerValidationEmail } from "./blocks/_footer.js";

//📁 /assets/js/blocks  catalog.js
import {
    catalogPopups,
    checkNum,
    priceSlider,
    filters,
} from "./blocks/catalog.js";

//📁 /assets/js/blocks  lkProfile.js
import { openMap, openAddress } from "./blocks/lkProfile.js";

//📁 /assets/js/blocks  sliders.js
import { sliderMain, sliderProductSpecial } from "./blocks/sliders.js";

//📁 /assets/js/blocks  specialSample.js
import { specialSampleTabs } from "./blocks/specialSample.js";

//📁 /assets/js/blocks  specialSample.js
import { mainGardenShow } from "./blocks/showFull.js";

//📁 /assets/js/blocks  specialSample.js
import { mapInit } from "./blocks/map.js";

//📁 /assets/js/blocks  scrollbar.js
import { mapAsideScroll } from "./blocks/scrollbar.js";

document.addEventListener("DOMContentLoaded", function () {
    // open contextual hint
    headerSearchelp();

    //hide headerTop on scroll
    headerScroll();

    //popup catalog
    headerCatalog();

    //popup basket and pre-order
    headerClick();

    // slick slider main
    sliderMain();

    // slick slider main page special product
    sliderProductSpecial();

    // sroll page on top
    footerScrollUp();

    // map
    mapInit();

    // map aside scroll
    mapAsideScroll();

    // tabs sliders in the main page section specialSample
    specialSampleTabs();

    // main garden show all
    mainGardenShow();

    // validation e-mail
    footerValidationEmail();

    // //open popups in catalog
    catalogPopups();

    // //check numbers in pagination
    checkNum();

    // //slider for price
    priceSlider();

    // //
    checkNum();

    // //all filters
    filters();

    //open map
    openMap();
     
    //open lists of shops in lk
    openAddress()

    //open client
    headerOpenClient()
});
