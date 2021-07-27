import { event } from "jquery";

export function checkClubCard() {
  if (document.querySelector(".clubRegistration__btn_js")) {
    const clubBtn = document.querySelector(".clubRegistration__btn_js");
    const agreementCheck = document.querySelector(".clubCheck_js");

    const clubCardWrapper = document.querySelector(".clubWrap_js");
    const clubCradPopup = document.querySelector(".clubPopup_js");
    const clubCardClose = document.querySelector(".clubPopupClose_js");

    clubBtn.onclick = (e) => {
      e.preventDefault();
      clubCardWrapper.classList.remove("hidden");
      document.body.classList.add("hiddenHeaderCatalog");
    };

    clubCardWrapper.onclick = (e) => {
      if (
        clubCradPopup &&
        e.target !== clubCradPopup &&
        !clubCradPopup.contains(e.target)
      ) {
        clubCardWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };

    clubCardClose.onclick = () => {
      clubCardWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        clubBtn.disabled = false;
      } else {
        clubBtn.disabled = true;
      }
    };
  }
}
