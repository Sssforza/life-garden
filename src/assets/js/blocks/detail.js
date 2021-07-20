export function openImage() {
  const imageClick = document.querySelectorAll(".imageClick_js");
  const image = document.querySelectorAll(".image_js");
  image.forEach((item) => {
   $(item).loupe()
  })
  imageClick.forEach((item) => {
    item.addEventListener("click", () => {
       imageClick.forEach((el) => {
        el.classList.remove("productCard__checked");
      });
      item.classList.add("productCard__checked");
      });
  });
}
export function otherClicks() {
  const clickWeight = document.querySelectorAll(".weight_js");
  clickWeight.forEach((item) => {
    item.addEventListener("click", () => {
      clickWeight.forEach((el) => {
        el.classList.remove("productCard__checked_small");
      });
      item.classList.add("productCard__checked_small");
    });
  });
  const clickColor = document.querySelectorAll(".color_js");
  clickColor.forEach((item) => {
    item.addEventListener("click", () => {
      clickColor.forEach((el) => {
        el.classList.remove("productCard__checked_small");
      });
      item.classList.add("productCard__checked_small");
    });
  });
}

export function checkCategories() {
  const clickCategories = document.querySelectorAll(".infoCategories_js");
  const blockCategories = document.querySelectorAll(".info_js");

  clickCategories.forEach((item) => {
    item.addEventListener("click", () => {
      clickCategories.forEach((el) => {
        el.classList.remove("productTabs__title_checked");
      });
      item.classList.add("productTabs__title_checked");
      blockCategories.forEach((element) => {
        if (item.id === element.id) {
          element.classList.remove("hidden");
        } else {
          element.classList.add("hidden");
        }
      });
    });
  });
}
