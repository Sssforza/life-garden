// main garden show all
export function mainGardenShow() {
  if (document.querySelector(".mainGardenBtn_js")) {
    const buttonGarden = document.querySelector(".mainGardenBtn_js");
    const infoGarden = document.querySelector(".mainGarden__info");

    buttonGarden.addEventListener("click", () => {
      infoGarden.classList.toggle("show");
    });
  }
}

//master-class show all
export function masterClassShow() {
  if (document.querySelector(".masterClassCard__body_js")) {
    const buttonMaster = document.querySelectorAll(
      ".masterClassCard__readAll_js"
    );
    const bodyMaster = document.querySelectorAll(".masterClassCard__body_js");

    buttonMaster.forEach((item) => {
      item.onclick = () => {
        bodyMaster.forEach((el) => {
          if (el.contains(item)) {
            el.classList.toggle("masterClassCard__body_show");
          }
        });
      };
    });
  }
}
