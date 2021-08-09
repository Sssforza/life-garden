export function checkShops() {
  if (document.querySelector(".choice__map_js")) {
    const clickMap = document.querySelector(".choice__map_js");
    const clickList = document.querySelector(".choice__list_js");
    const blockMap = document.querySelector(".map__show_js");
    const blockList = document.querySelectorAll(".aside__show_js");

    clickMap.addEventListener("click", () => {
      clickMap.classList.add("choice__btn_checked");
      clickList.classList.remove("choice__btn_checked");
      blockMap.classList.add("map_checked");
      blockList.forEach((item) => item.classList.remove("map_checked"));
    });
    clickList.addEventListener("click", () => {
      clickMap.classList.remove("choice__btn_checked");
      clickList.classList.add("choice__btn_checked");
      blockMap.classList.remove("map_checked");
      blockList.forEach((item) => item.classList.add("map_checked"));
    });
  }
}
