
// special sample tabs
export function specialSampleTabs () {
	let wrapper = document.querySelector('.productSpecial_js');
	let tabs = wrapper.querySelectorAll('.specialSampleItem_js');
	let elements = wrapper.querySelectorAll('.sliderProductSpecial_js');
	tabs.forEach((item) => {
		item.addEventListener( "click" , (e) => {
			let thisShow = item.getAttribute('data-sample');
			tabs.forEach((i) => {
				i.classList.remove('active');
			});
			item.classList.add('active');
			elements.forEach((elem) => {
				elem.classList.add('hide');
				elem.classList.remove('show');
				if (elem.getAttribute('data-slider') === thisShow) {
					elem.classList.remove('hide');
					elem.classList.add('show');
				}
			});
		});
	});
};
