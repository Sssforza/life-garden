export function masterClassPopups() {
  if (document.querySelector(".masterArchive__popup_js")) {
    const masterPopup = document.querySelector(".masterArchive__popup_js");
    const btnClosePopup = masterPopup.querySelector(".masterArchive__close_js");
    const btnOpenPopup = document.querySelector(".masterArchive__date_js");
    const btnApplyPopup = masterPopup.querySelector(".masterArchive__apply_js");
    const masterItems = masterPopup.querySelectorAll(".masterArchive__item_js");
    const inputsClicker = masterPopup.querySelectorAll(
      ".masterArchive__input_js"
    );
    const inputsItems = masterPopup.querySelectorAll(
      ".masterArchive__inputItem_js"
    );
    document.onclick = function (e) {
      if (
        masterPopup &&
        e.target !== masterPopup &&
        e.target !== btnOpenPopup &&
        !masterPopup.contains(e.target)
      ) {
        masterPopup.classList.add("hidden");
        masterItems.forEach((el) => {
          el.classList.remove("masterArchive__item_open");
        });
      }
    };
    btnOpenPopup.onclick = () => {
      masterPopup.classList.remove("hidden");
    };
    btnClosePopup.onclick = () => {
      masterPopup.classList.add("hidden");
    };
    btnApplyPopup.onclick = () => {
      masterPopup.classList.add("hidden");
    };
    inputsClicker.forEach((item) => {
      item.onclick = () => {
        masterItems.forEach((el) => {
          if (el.contains(item)) {
            el.classList.toggle("masterArchive__item_open");
          }
        });
      };
    });
    inputsItems.forEach((item) => {
      item.onclick = () => {
        masterItems.forEach((el) => {
          if (el.contains(item)) {
            el.classList.toggle("masterArchive__item_open");
            el.querySelector(".envelopeInput__input").value = item.textContent;
          }
        });
      };
    });
  }
}
export function masterClassBuy() {
  if (document.querySelector(".masterClassOrder_js")) {
    const masterBuyBtn = document.querySelectorAll(".masterClass__btn_js");
    const masterBuyWrapper = document.querySelector(".masterClassWrapper_js");
    const masterBuyPopup = document.querySelector(".masterClassOrder_js");
    const masterBuyClose = document.querySelector(
      ".masterClass__orderClose_js"
    );
    const masterBuyOrder = document.querySelector(
      ".masterClassOrder__btn_js"
    );
    masterBuyBtn.forEach((item) => {
      item.onclick = () => {
        masterBuyWrapper.classList.remove("hidden");
        document.body.classList.add("hiddenHeaderCatalog");
      };
    });
    masterBuyWrapper.onclick = (e) => {
      if (
        masterBuyPopup &&
        e.target !== masterBuyPopup &&
        !masterBuyPopup.contains(e.target)
      ) {
        masterBuyWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };
    masterBuyClose.onclick = () => {
      masterBuyWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
    masterBuyOrder.onclick = () => {
      masterBuyWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
  }
}
