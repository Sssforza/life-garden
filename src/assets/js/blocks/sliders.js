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
    if (document.querySelector(".sliderProductSpecial_js")) {
        const slickMain = $(".sliderProductSpecial_js");
        if (slickMain.length) {
            slickMain.slick({
                infinite: false,
                speed: 500,
                slidesToShow: 1.5,
                slidesToScroll: 1,
                draggable: false,
                arrows: false,
                mobileFirst: true,
                variableWidth: true,

                prevArrow:
                    '<div class="productBlock__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
                nextArrow:
                    '<div class="productBlock__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
                responsive: [
                    {
                        breakpoint: 565,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            arrows: true,
                            draggable: true,
                            variableWidth: false,
                        },
                    },
                    {
                        breakpoint: 1401,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            arrows: true,
                            draggable: true,
                            variableWidth: false,
                        },
                    },
                ],
            });
        }
    }
}
export function sliderProductSectionCategories() {
    if (document.querySelector(".productSectionCategories__slider_js")) {
        const slickMain = $(".productSectionCategories__slider_js");
        if (slickMain.length) {
            slickMain.slick({
                infinite: false,
                speed: 500,
                slidesToShow: 2.5,
                slidesToScroll: 1,
                draggable: true,
                arrows: false,
                variableWidth: true,
            });
        }
    }
}
// sliderAbout
export function sliderAbout() {
    const slickMain = $(".aboutSlider_js");
    if (slickMain.length) {
        slickMain.slick({
            infinite: true,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 1,
            draggable: false,
            prevArrow: `<div class="aboutSlider__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 19L3 10.16L12 2" stroke="#1E7243" stroke-width="3" stroke-linecap="round"/>
        </svg></div>`,
            nextArrow: `<div class="aboutSlider__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 19L3 10.16L12 2" stroke="#1E7243" stroke-width="3" stroke-linecap="round"/>
        </svg></div>`,
        });
    }
}

// sliderProduct
export function sliderProduct() {
    const slickMain = $(".sliderProduct_js");
    if (slickMain.length) {
        slickMain.slick({
            infinite: false,
            speed: 500,
            slidesToShow: 6,
            slidesToScroll: 6,
            draggable: false,
            focusOnSelect: false,
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
export function sliderMasterClass() {
    const sliderFor = $(".masterClass__sliderFor_js");
    const sliderNav = $(".masterClass__sliderNav_js");
    if (sliderFor.length) {
        sliderFor.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: ".masterClass__sliderNav_js",
            prevArrow: `<div class="masterClass__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 19L3 10.16L12 2" stroke="#1E7243" stroke-width="3" stroke-linecap="round"/>
      </svg></div>`,
            nextArrow: `<div class="masterClass__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M12 19L3 10.16L12 2" stroke="#1E7243" stroke-width="3" stroke-linecap="round"/>
      </svg></div>`,
        });
        sliderNav.slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: ".masterClass__sliderFor_js",
            focusOnSelect: true,
            arrows: false,
            draggable: false,
        });
    }
}
