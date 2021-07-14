export function openImage() {
  const imageClick = document.querySelectorAll(".imageClick__js");
  const image = document.querySelector(".image_js");
  imageClick.forEach((item) => {
    item.addEventListener("click", () => {
      imageClick.forEach((el) => {
        el.classList.remove("product_checked");
      });
      item.classList.add("product_checked");
      image.style.backgroundImage = item.style.backgroundImage;
    });
  });
}

export function otherClicks() {
  const clickWeight = document.querySelectorAll(".weight__js");
  clickWeight.forEach((item) => {
    item.addEventListener("click", () => {
      clickWeight.forEach((el) => {
        el.classList.remove("product_checked");
      });
      item.classList.add("product_checked");
    });
  });
  const clickColor = document.querySelectorAll(".color__js");
  clickColor.forEach((item) => {
    item.addEventListener("click", () => {
      clickColor.forEach((el) => {
        el.classList.remove("product_checked");
      });
      item.classList.add("product_checked");
    });
  });
}

export function checkCategories() {
  const clickCategories = document.querySelectorAll(".infoCategories__js");
  const blockCategories = document.querySelectorAll(".info__js");

  clickCategories.forEach((item) => {
    item.addEventListener("click", () => {
      clickCategories.forEach((el) => {
        el.classList.remove("info__title_checked");
      });
      item.classList.add("info__title_checked");
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
