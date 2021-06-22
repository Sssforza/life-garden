
// SliderMain
export function sliderMain () {
	console.log($(".mainSlier_js"))
    const slickMain = $('.mainSlier_js');

	if (slickMain.length) {
		slickMain.slick({
			fade: true,
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			cssEase: 'linear',
			prevArrow: '<div class="mainSlier__prev"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
			nextArrow: '<div class="mainSlier__next"><svg width="14" height="21" viewBox="0 0 14 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.83984 2L10.8398 10.84L1.83984 19" stroke="white" stroke-width="3" stroke-linecap="round"/></svg></div>',
			dots: true,
			dotsClass: "mainSlier__dots",
		});
    }
};
