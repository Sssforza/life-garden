export function openMap() {
  if (document.querySelector(".windowsMapWrapper__js")) {
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
      /*       setTimeout(() => {
        document.addEventListener("click", closePopup);
      }, 0); */
    });

    mapPopupClose.addEventListener("click", () => {
      mapPopup.classList.add("hidden");
      scrollOffOn();
      document.removeEventListener("click", closePopup);
    });
  }
}

export function checkMethodDelivery() {
  const clickCourier = document.querySelector(".choice__courier_js");
  const clickPickup = document.querySelector(".choice__pickup_js");
  const blockCourier = document.querySelector(".lkProfile__courier_js");
  const blockPickup = document.querySelector(".lkProfile__pickup_js");
  const clickAdd = document.querySelector(".lkProfile__addBtn_js");
  const blockAdd = document.querySelector(".lkProfile__addAddress_js");
  const clickDeleteAddress = document.querySelectorAll(".lkProfile__delete_js");

  clickCourier.addEventListener("click", () => {
    clickCourier.classList.add("choice__btn_checked");
    clickPickup.classList.remove("choice__btn_checked");
    blockCourier.classList.remove("hidden");
    blockPickup.classList.add("hidden");
  });
  clickPickup.addEventListener("click", () => {
    clickPickup.classList.add("choice__btn_checked");
    clickCourier.classList.remove("choice__btn_checked");
    blockCourier.classList.add("hidden");
    blockPickup.classList.remove("hidden");
    blockAdd.classList.add("hidden");

  });

  clickAdd.addEventListener("click", () => {
    blockAdd.classList.toggle("hidden");
  });
  
  clickDeleteAddress.forEach((item) => {
    item.onclick = () => {
      item.parentNode.parentNode.removeChild(item.parentNode);
    }
  })

}

export function openAddress() {
  if (document.querySelector(".openAddress__js")) {
    const addressBtn = document.querySelector(".openAddress__js");
    const addressPopup = document.querySelector(".shops__js");
    addressBtn.addEventListener("click", () => {
      addressPopup.classList.toggle("lkProfile__input_open");
    });
  }
}
