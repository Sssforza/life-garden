// SliderMain
export function sliderMain() {
  const slickMain = $(".mainSlier_js");
  if (slickMain.length) {
    slickMain.slick({
      fade: true,
      infinite: false,
      speed: 500,
      slidesToShow: 1,
      slidesToScroll: 1,
      cssEase: "linear",
      prevArrow:
        '<div class="mainSlier__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
      nextArrow:
        '<div class="mainSlier__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
      dots: true,
      dotsClass: "mainSlier__dots",
      draggable: false,
    });
    let dotsParent = document.querySelector(".mainSlier__dots");
    let dotsWidth = dotsParent.offsetWidth / 2;
    dotsParent.style.marginLeft = "-" + dotsWidth + "px";
  }
}

// sliderProductSpecial
export function sliderProductSpecial() {
  const slickMain = $(".sliderProductSpecial_js");
  if (slickMain.length) {
    slickMain.slick({
      infinite: false,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      draggable: false,
      prevArrow:
        '<div class="productBlock__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
      nextArrow:
        '<div class="productBlock__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
    });
  }
}

// sliderProduct
export function sliderProduct() {
  const slickMain = $(".sliderProduct_js");
  const slickFor = $(".sliderFor_js");
  if (slickMain.length) {
    slickFor.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.sliderProduct_js'
    });
    slickMain.slick({
      infinite: false,
      speed: 500,
      slidesToShow: 6,
      slidesToScroll: 6,
      asNavFor: '.sliderFor_js',
      draggable: false,
      prevArrow: `<div class="productCard__prev"><svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.90039 17.8008L2.00037 9.90076L9.90039 2.00073" stroke="#919EAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M3.40039 9.80078L28.4004 9.80078" stroke="#919EAB" stroke-width="2" stroke-linecap="round"/>
			</svg>
			</div>`,
      nextArrow: `<div class="productCard__next"><svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M19.5 2L27.4 9.90002L19.5 17.8" stroke="#919EAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
      <path d="M26 10L1 10" stroke="#919EAB" stroke-width="2" stroke-linecap="round"/>
      </svg>
	  </div>`,
    });
  }
}
