function validateEmail(value) {
  const re =
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(value);
}

export function validationEnter() {
  const enterEmail = document.querySelector(".enter__email_js");
  const enterPassword = document.querySelector(".enter__password_js");
  const enterBtn = document.querySelector(".enter__btn_js");

  enterBtn.onclick = (e) => {
    e.preventDefault();
    if (!validateEmail(enterEmail.value)) {
      enterEmail.classList.add("envelopeInput__input_error");
    } else {
      enterEmail.classList.remove("envelopeInput__input_error");
    }
    if (enterPassword.value.length === 0) {
      enterPassword.classList.add("envelopeInput__input_error");
    } else {
      enterPassword.classList.remove("envelopeInput__input_error");
    }
    if (validateEmail(enterEmail.value) && enterPassword.value.length > 0) {
      console.log(enterEmail.value);
      $.magnificPopup.close();
    }
  };
}
export function validationReg() {
  const regEmail = document.querySelector(".reg__email_js");
  const regPassword = document.querySelector(".reg__password_js");
  const regBtn = document.querySelector(".reg__btn_js");

  regBtn.onclick = (e) => {
    e.preventDefault();
    if (!validateEmail(regEmail.value)) {
      regEmail.classList.add("envelopeInput__input_error");
    } else {
      regEmail.classList.remove("envelopeInput__input_error");
    }
    if (regPassword.value.length === 0) {
      regPassword.classList.add("envelopeInput__input_error");
    } else {
      regPassword.classList.remove("envelopeInput__input_error");
    }
    if (validateEmail(regEmail.value) && regPassword.value.length > 0) {
      $(function () {
        $.magnificPopup.open({
          items: {
            src: "#personal",
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
export function validationForgot() {
  const forgotEmail = document.querySelector(".forgot__email_js");
  const forgotBtn = document.querySelector(".forgotPassword__btn_js");

  forgotBtn.onclick = (e) => {
    e.preventDefault();
    if (!validateEmail(forgotEmail.value)) {
      forgotEmail.classList.add("envelopeInput__input_error");
    } else {
      console.log(forgotEmail.value);
      $.magnificPopup.close();
    }
  };
}
export function validationRecovery() {
  const enterRecPassword = document.querySelector(".recovery__enter_js");
  const repeatRecPassword = document.querySelector(".recovery__repeat_js");
  const recoveryBtn = document.querySelector(".recoveryPassword__btn_js");
  const recoveryError = document.querySelector(".recovery__error_js");

  recoveryBtn.onclick = (e) => {
    e.preventDefault();
    if (enterRecPassword.value === repeatRecPassword.value) {
      enterRecPassword.classList.remove("envelopeInput__input_error");
      repeatRecPassword.classList.remove("envelopeInput__input_error");
      recoveryError.classList.add("hidden");
      console.log(enterRecPassword.value);
    } else {
      enterRecPassword.classList.add("envelopeInput__input_error");
      repeatRecPassword.classList.add("envelopeInput__input_error");
      recoveryError.classList.remove("hidden");
    }
  };
}
export function validationClubCard() {
  const clubCardWindowName = document.querySelector(".clubCardWindow__name_js");
  const clubCardWindowSurname = document.querySelector(
    ".clubCardWindow__surname_js"
  );
  const clubCardWindowEmail = document.querySelector(
    ".clubCardWindow__email_js"
  );
  const clubCardWindowBtn = document.querySelector(".clubCardWindow__btn_js");

  clubCardWindowBtn.onclick = (e) => {
    e.preventDefault();
    if (!validateEmail(clubCardWindowEmail.value)) {
      clubCardWindowEmail.classList.add("envelopeInput__input_error");
    } else {
      clubCardWindowEmail.classList.remove("envelopeInput__input_error");
    }
    if (clubCardWindowName.value.length === 0) {
      clubCardWindowName.classList.add("envelopeInput__input_error");
    } else {
      clubCardWindowName.classList.remove("envelopeInput__input_error");
    }
    if (clubCardWindowSurname.value.length === 0) {
      clubCardWindowSurname.classList.add("envelopeInput__input_error");
    } else {
      clubCardWindowSurname.classList.remove("envelopeInput__input_error");
    }
    if (
      validateEmail(clubCardWindowEmail.value) &&
      clubCardWindowName.value.length > 0 &&
      clubCardWindowSurname.value.length > 0
    ) {
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
export function validationPersonal() {
  const personalTel = document.querySelector(".personal__tel_js");
  const personalBtn = document.querySelector(".personal__btn_js");
  personalBtn.onclick = (e) => {
    e.preventDefault();
    if (personalTel.value.length < 18 && personalTel.value.length > 1) {
      personalTel.classList.add("envelopeInput__input_error");
    } else {
      personalTel.classList.remove("envelopeInput__input_error");
      console.log("SUPER");
      $.magnificPopup.close();
    }
  };

  $(".maskPhone").mask("+7 (Z00) 000-00-00", {
    translation: {
      Z: { pattern: /[0-69-9]/ },
    },
  });
}
export function validationMasterClass() {
  if (document.querySelector(".popup-modal-masterClassOrder")) {
    const masterClassName = document.querySelector(".masterClass__name_js");
    const masterClassSurname = document.querySelector(
      ".masterClass__surname_js"
    );
    const masterClassTel = document.querySelector(".masterClass__tel_js");
    const masterClassEmail = document.querySelector(".masterClass__email_js");
    const masterClassBtn = document.querySelector(".masterClassOrder__btn_js");

    $(".maskPhone").mask("+7 (Z00) 000-00-00", {
      translation: {
        Z: { pattern: /[0-69-9]/ },
      },
    });
    masterClassBtn.onclick = (e) => {
      e.preventDefault();
      if (masterClassEmail.value.length > 0) {
        if (!validateEmail(masterClassEmail.value)) {
          masterClassEmail.classList.add("envelopeInput__input_error");
        } else {
          masterClassEmail.classList.remove("envelopeInput__input_error");
        }
      }
      if (masterClassName.value.length === 0) {
        masterClassName.classList.add("envelopeInput__input_error");
      } else {
        masterClassName.classList.remove("envelopeInput__input_error");
      }
      if (masterClassSurname.value.length === 0) {
        masterClassSurname.classList.add("envelopeInput__input_error");
      } else {
        masterClassSurname.classList.remove("envelopeInput__input_error");
      }
      if (masterClassTel.value.length < 18) {
        masterClassTel.classList.add("envelopeInput__input_error");
      } else {
        masterClassTel.classList.remove("envelopeInput__input_error");
      }
      if (
        masterClassName.value.length > 0 &&
        masterClassSurname.value.length > 0 &&
        masterClassTel.value.length === 18
      ) {
        console.log("SUPER");
        $.magnificPopup.close();
      }
    };

    const agreementCheck = document.querySelector(".check__master_js");
    const masterBuyOrder = document.querySelector(".masterClassOrder__btn_js");

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        masterBuyOrder.disabled = false;
      } else {
        masterBuyOrder.disabled = true;
      }
    };
  }
}
