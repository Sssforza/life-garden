export function openImage() {
  const imageClick = document.querySelectorAll(".imageClick__js");
  const image = document.querySelector(".image_js");

  imageClick.forEach((item) => {
    item.addEventListener("click", () => {
      image.style.backgroundImage = item.style.backgroundImage;
    });
  });


}
