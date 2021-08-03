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
    const inputYear = masterPopup.querySelector(".masterArchive__year_js");
    const inputMonth = masterPopup.querySelector(".masterArchive__month_js");
    function closeInputs() {
      masterItems.forEach((el) => {
        el.classList.remove("masterArchive__item_open");
      });
    }
    document.onclick = function (e) {
      if (
        masterPopup &&
        e.target !== masterPopup &&
        e.target !== btnOpenPopup &&
        !masterPopup.contains(e.target)
      ) {
        masterPopup.classList.add("hidden");
        closeInputs();
      }
    };
    btnOpenPopup.onclick = () => {
      masterPopup.classList.remove("hidden");
    };
    btnClosePopup.onclick = () => {
      masterPopup.classList.add("hidden");
      closeInputs();
    };
    btnApplyPopup.onclick = () => {
      masterPopup.classList.add("hidden");
      closeInputs();
      btnOpenPopup.textContent = `${inputMonth.value} ${inputYear.value}`;
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
  if (document.querySelector(".popup-modal-masterClassOrder")) {
    const agreementCheck = document.querySelector(".check__master_js");
    const masterBuyOrder = document.querySelector(".masterClassOrder__btn_js");

    agreementCheck.onclick = () => {
      console.log("sdfs");
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        masterBuyOrder.disabled = false;
      } else {
        masterBuyOrder.disabled = true;
      }
    };
    $(function () {
      $(".popup-modal-masterClassOrder").magnificPopup({
        type: "inline",
        preloader: false,
        modal: false,
        showCloseBtn: false,
      });
      $(document).on("click", ".popup-modal-dismiss", function (e) {
        $.magnificPopup.close();
      });
    });
  }
}

export function masterChoiceMonth() {
  if (document.querySelector(".choice__nowMonth_js")) {
    const clickNowMonth = document.querySelector(".choice__nowMonth_js");
    const clickNextMonth = document.querySelector(".choice__nextMonth_js");
    const nowMonthCards = document.querySelector(
      ".masterClass__containerNow_js"
    );
    const nextMonthCards = document.querySelector(
      ".masterClass__containerNext_js"
    );

    clickNowMonth.addEventListener("click", () => {
      clickNowMonth.classList.add("choice__btn_checked");
      clickNextMonth.classList.remove("choice__btn_checked");
      nowMonthCards.classList.remove("hidden");
      nextMonthCards.classList.add("hidden");
    });
    clickNextMonth.addEventListener("click", () => {
      clickNowMonth.classList.remove("choice__btn_checked");
      clickNextMonth.classList.add("choice__btn_checked");
      nowMonthCards.classList.add("hidden");
      nextMonthCards.classList.remove("hidden");
    });
  }
}
