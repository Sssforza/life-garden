
// main garden show all
export function mainGardenShow () {
	const buttonGarden = document.querySelector(".mainGardenBtn_js");
    const infoGarden = document.querySelector(".mainGarden__info");

    buttonGarden.addEventListener("click", () => {
        infoGarden.classList.toggle("show");
    });
};
