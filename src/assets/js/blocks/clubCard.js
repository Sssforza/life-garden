export function checkClubCard() {
  if (document.querySelector(".clubRegistration__btn_js")) {
    const clubBtn = document.querySelector(".clubRegistration__btn_js");
    const agreementCheck = document.querySelector(".clubCheck_js");

    const clubCardWrapper = document.querySelector(".clubWrap_js");
    const clubCradPopup = document.querySelector(".clubPopup_js");
    const clubCardClose = document.querySelector(".clubPopupClose_js");

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        clubBtn.classList.remove("btn_disabled");
      } else {
        clubBtn.classList.add("btn_disabled");
      }
    };

    function validateEmail(value) {
      const re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(value);
    }
    const clubCardName = document.querySelector(".clubCard__name_js");
    const clubCardSurname = document.querySelector(".clubCard__surname_js");
    const clubCardEmail = document.querySelector(".clubCard__email_js");

    clubBtn.onclick = (e) => {
      e.preventDefault();
      if (!validateEmail(clubCardEmail.value)) {
        clubCardEmail.classList.add("envelopeInput__input_error");
      } else {
        clubCardEmail.classList.remove("envelopeInput__input_error");
      }
      if (clubCardName.value.length === 0) {
        clubCardName.classList.add("envelopeInput__input_error");
      } else {
        clubCardName.classList.remove("envelopeInput__input_error");
      }
      if (clubCardSurname.value.length === 0) {
        clubCardSurname.classList.add("envelopeInput__input_error");
      } else {
        clubCardSurname.classList.remove("envelopeInput__input_error");
      }
      if (
        validateEmail(clubCardEmail.value) &&
        clubCardName.value.length > 0 &&
        clubCardSurname.value.length > 0
      ) {
        document.querySelector(".clubRegistration__form_js").reset();
        $(function () {
          $.magnificPopup.open({
            items: {
              src: "#clubPagePopup",
            },
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
    };
  }
}
