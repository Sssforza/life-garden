
// SliderMain
export function sliderMain () {
    const slickMain = $('.mainSlier_js');
	if (slickMain.length) {
		slickMain.slick({
			fade: true,
			infinite: false,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			cssEase: 'linear',
			prevArrow: '<div class="mainSlier__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="mainSlier__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
			dots: true,
			dotsClass: "mainSlier__dots",
			draggable: false,
		});
		let dotsParent = document.querySelector('.mainSlier__dots');
		let dotsWidth = dotsParent.offsetWidth / 2;
		dotsParent.style.marginLeft = '-' + dotsWidth + 'px';
    }
};

// sliderProductSpecial
export function sliderProductSpecial () {
    const slickMain = $('.sliderProductSpecial_js');
	if (slickMain.length) {
		slickMain.slick({
			infinite: false,
			speed: 500,
			slidesToShow: 4,
			slidesToScroll: 1,
			draggable: false,
			prevArrow: '<div class="productBlock__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="productBlock__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
		});
    }
};

// sliderProduct
export function sliderProduct() {
    const slickMain = $('.sliderProduct_js');
	if (slickMain.length) {
		slickMain.slick({
			infinite: false,
			speed: 500,
			slidesToShow: 6,
			slidesToScroll: 6,
			draggable: false,
			prevArrow: '<div class="product__prev">&larr;</div>',
			nextArrow: '<div class="product__next">&rarr;</div>',
		});
    }
};
