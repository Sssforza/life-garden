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
  headerOpenClient,
  quickView,
  clubCardPopup,
  authorization,
  forgotPassword,
  personal,
  recoveryPassword,
  validationPopups
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

//📁 /assets/js/blocks .js
import {
  openMap,
  openAddress,
  checkMethodDelivery,
  dateBirthday,
} from "./blocks/lkProfile.js";

//📁 /assets/js/blocks  sliders.js
import {
  sliderMain,
  sliderProductSpecial,
  sliderProduct,
  sliderAbout,
  sliderMasterClass,
} from "./blocks/sliders.js";

//📁 /assets/js/blocks  specialSample.js
import { specialSampleTabs } from "./blocks/specialSample.js";

//📁 /assets/js/blocks  product.js
import { openImage, checkCategories, otherClicks } from "./blocks/detail.js";

//📁 /assets/js/blocks  masterClass.js
import {
  masterClassPopups,
  masterClassBuy,
  masterChoiceMonth,
} from "./blocks/masterClass.js";

//📁 /assets/js/blocks  specialSample.js
import { mainGardenShow, masterClassShow } from "./blocks/showFull.js";

//📁 /assets/js/blocks  specialSample.js
import { mapInit } from "./blocks/map.js";
//📁 /assets/js/blocks  specialSample.js
import { mapWindow } from "./blocks/mapWindow.js";

//📁 /assets/js/blocks  scrollbar.js
import { mapAsideScroll } from "./blocks/scrollbar.js";

//📁 /assets/js/blocks  clubCard.js
import { checkClubCard } from "./blocks/clubCard.js";

//📁 /assets/js/blocks  newspaper.js
import { newspaperPopup, pdfLoader } from "./blocks/newspaper.js";

//📁 /assets/js/blocks  articles.js
import { articles } from "./blocks/articles.js";

//📁 /assets/js/blocks  news.js
import { newsCategories } from "./blocks/news.js";

//📁 /assets/js/blocks  feedback.js
import { reviewCheck } from "./blocks/feedback.js";

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

  // slick slider Product page
  sliderProduct();

  // sroll page on top
  footerScrollUp();

  // map
  mapInit();
  // mapWindow
  mapWindow();

  // map aside scroll
  mapAsideScroll();

  // tabs sliders in the main page section specialSample
  specialSampleTabs();

  // main garden show all
  mainGardenShow();

  // mster-class show all
  masterClassShow();

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

  //check method delivery
  checkMethodDelivery();

  //open lists of shops in lk
  openAddress();

  //close message birthday in lk
  dateBirthday();

  //open client
  headerOpenClient();

  //check category in product
  checkCategories();

  //other clicks in product
  otherClicks();

  //open big image in product
  openImage();

  // slick slider About page
  sliderAbout();

  // slick slider MasterClass page
  sliderMasterClass();

  // all archives MasterClass page
  masterClassPopups();

  // buy popup MasterClass page
  masterClassBuy();

  // choice month MasterClass page
  masterChoiceMonth();

  // quickView detail popup
  quickView();

  // check policy club-card
  checkClubCard();

  // club-card popup
  clubCardPopup();

  // authorization popup
  authorization();

  // forgot Password popup
  forgotPassword();

  // personal popup
  personal();

  // recovery Password popup
  recoveryPassword();

  // newspaper popup
  newspaperPopup();

  // pdf loader popup
  pdfLoader();

  // articles
  articles();

  // check categories in news
  newsCategories();

  // validation all popups
  validationPopups();

  // check stars in feedback
  reviewCheck();
});
