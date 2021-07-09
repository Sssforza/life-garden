export function openMap() {
  const mapPopup = document.querySelector(".windowsMapWrapper__js");
  const mapPopupWindow = document.querySelector(".windowsMapPopup__js");
  const mapPopupClose = document.querySelector(".windowsMapClose__js");
  const mapBtn = document.querySelector(".showMap__js");
  function closePopup(e) {
    if (
      mapPopupWindow &&
      e.target !== mapPopupWindow &&
      !mapPopupWindow.contains(e.target)
    ) {
      mapPopup.classList.add("hidden");
      scrollOffOn();
      document.removeEventListener("click", closePopup);
    }
  }
  function scrollOffOn() {
    return document.body.classList.toggle("hiddenHeaderCatalog");
  }

  mapBtn.addEventListener("click", () => {
    mapPopup.classList.remove("hidden");
    scrollOffOn();
    setTimeout(() => {
      document.addEventListener("click", closePopup);
    }, 0);
  });

  mapPopupClose.addEventListener("click", () => {
    mapPopup.classList.add("hidden");
    scrollOffOn();
    document.removeEventListener("click", closePopup);
  });
}

export function openAddress() {
  const addressBtn = document.querySelector(".openAddress__js");
  const addressPopup = document.querySelector(".shops__js");
console.log(addressBtn, addressPopup);
/*   addressBtn.addEventListener('click', () => {
      addressPopup.classList.toggle('lkProfile__input_open')
  }) */
}
