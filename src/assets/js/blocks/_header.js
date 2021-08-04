export function headerCatalog() {
  const buttonCatalog = document.querySelector(".headerMiddleCatalog_js");
  const headerCatalog = document.querySelector(".headerCatalog_js");
  const hamburger = document.querySelector(".hamburger_js");

  buttonCatalog.addEventListener("click", () => {
    headerCatalog.classList.toggle("headerCatalog__go");
    document.body.classList.toggle("hiddenHeaderCatalog");
    hamburger.classList.toggle("is-active");
  });
}

export function headerSearchelp() {
  const headerHelp = document.querySelector(".headerHelp_js");
  const headerForm = document.querySelector(".headerMiddleForm_js");
  document.addEventListener("click", function (e) {
    if (
      headerHelp &&
      e.target !== headerHelp &&
      !headerHelp.contains(e.target)
    ) {
      headerHelp.classList.add("hidden");
    }
  });
  headerForm.addEventListener("input", function (event) {
    if (event.target.value.length >= 2) {
      headerHelp.classList.remove("hidden");
    } else {
      headerHelp.classList.add("hidden");
    }
  });
}

export function headerClick() {
  const basketClick = document.querySelector(".headerBasket_js");
  const basketPop = document.querySelector(".headerClickBasket_js");
  const preorderClick = document.querySelector(".headerPreorder_js");
  const preorderPop = document.querySelector(".headerClickPreorder_js");

  function closeBasket(e) {
    if (basketPop && e.target !== basketPop && !basketPop.contains(e.target)) {
      basketPop.classList.add("hidden");
    }
  }
  function closePreorder(e) {
    if (
      preorderPop &&
      e.target !== preorderPop &&
      !preorderPop.contains(e.target)
    ) {
      preorderPop.classList.add("hidden");
    }
  }

  basketClick.addEventListener("click", (e) => {
    if (basketPop.classList.contains("hidden")) {
      document.removeEventListener("click", closeBasket);
    }
    basketPop.classList.toggle("hidden");
    setTimeout(() => {
      document.addEventListener("click", closeBasket);
    }, 0);
  });

  preorderClick.addEventListener("click", () => {
    if (preorderPop.classList.contains("hidden")) {
      document.removeEventListener("click", closePreorder);
    }
    preorderPop.classList.toggle("hidden");
    setTimeout(() => {
      document.addEventListener("click", closePreorder);
    }, 0);
  });
}

export function headerScroll() {
  const headerTop = document.querySelector(".headerTop");
  window.onscroll = function () {
    if (window.pageYOffset > 1) {
      headerTop.classList.add("headerTop__hidden");
    } else {
      headerTop.classList.remove("headerTop__hidden");
    }
  };
}

export function headerOpenClient() {
  const headerTopClient = document.querySelector(".client_js");
  const btnClient = document.querySelector(".clientClick_js");

  btnClient.addEventListener("click", () => {
    headerTopClient.classList.toggle("headerTop__client_open");
  });
}

export function quickView() {
  if (document.querySelector(".cardProduct__quickView_js")) {
    const slickMain = $(".sliderQuickView_js");
    var slick = slickMain.slick({
      infinite: false,
      speed: 500,
      slidesToShow: 6,
      slidesToScroll: 6,
      draggable: false,
      focusOnSelect: false,
      prevArrow: `<div class="productCard__prev"><svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.90039 17.8008L2.00037 9.90076L9.90039 2.00073" stroke="#919EAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3.40039 9.80078L28.4004 9.80078" stroke="#919EAB" stroke-width="2" stroke-linecap="round"/>
        </svg>
        </div>`,
      nextArrow: `<div class="productCard__next"><svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.5 2L27.4 9.90002L19.5 17.8" stroke="#919EAB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M26 10L1 10" stroke="#919EAB" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </div>`,
    });
    const quickViewSmallImg = document.querySelectorAll(".quickView__small_js");
    const quickViewBigImg = document.querySelector(".quickView__big_js");

    quickViewSmallImg.forEach((item) => {
      item.addEventListener("click", () => {
        quickViewSmallImg.forEach((el) => {
          el.classList.remove("productCard__checked");
        });
        quickViewBigImg.src = item.src;
        item.classList.add("productCard__checked");
      });
    });
    $(".popup-modal").click(() => {
      slick.slick("refresh");
    });
    $(function () {
      $(".popup-modal").magnificPopup({
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

export function clubCardPopup() {
  if (document.querySelector(".clubCard__btn_js")) {
    const clubCardWindowBtn = document.querySelector(".clubCardWindow__btn_js");
    const agreementCheck = document.querySelector(".check_js");

    $(function () {
      $(".popup-modal-club").magnificPopup({
        type: "inline",
        preloader: false,
        modal: false,
        showCloseBtn: false,
      });
      $(document).on("click", ".popup-modal-dismiss", function (e) {
        $.magnificPopup.close();
      });
    });

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        clubCardWindowBtn.disabled = false;
      } else {
        clubCardWindowBtn.disabled = true;
      }
    };
  }
}

export function authorization() {
  if (document.querySelector(".headerTop__authorization_js")) {
    $(function () {
      $(".popup-modal-authorization").magnificPopup({
        type: "inline",
        preloader: false,
        modal: false,
        showCloseBtn: false,
      });
      $(document).on("click", ".popup-modal-dismiss", function (e) {
        $.magnificPopup.close();
      });
    });

    const checkEnter = document.querySelector(".checkEnter_js");
    const checkReg = document.querySelector(".checkReg_js");
    const formEnter = document.querySelector(".authorization__enter_js");
    const formReg = document.querySelector(".authorization__registration_js");

    checkEnter.onclick = () => {
      checkEnter.classList.add("authorization__check_checked");
      checkReg.classList.remove("authorization__check_checked");
      formReg.classList.add("hidden");
      formEnter.classList.remove("hidden");
    };

    checkReg.onclick = () => {
      checkEnter.classList.remove("authorization__check_checked");
      checkReg.classList.add("authorization__check_checked");
      formReg.classList.remove("hidden");
      formEnter.classList.add("hidden");
    };

    const agreementCheck = document.querySelector(".enter__check_js");
    const regBtn = document.querySelector(".reg__btn_js");

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        regBtn.classList.remove("btn_disabled");
      } else {
        regBtn.classList.add("btn_disabled");
      }
    };
  }
}

export function recoveryPassword() {
  if (document.querySelector(".recoveryPassword_js")) {
    const recoveryWrapper = document.querySelector(".recoveryPassword_js");
    const recoveryPopup = recoveryWrapper.querySelector(
      ".recoveryPassword__popup_js"
    );
    const recoveryClose = recoveryWrapper.querySelector(
      ".recoveryPassword__close_js"
    );
    const recoveryBtn = recoveryWrapper.querySelector(
      ".recoveryPassword__btn_js"
    );

    recoveryWrapper.onclick = (e) => {
      if (
        recoveryPopup &&
        e.target !== recoveryPopup &&
        !recoveryPopup.contains(e.target)
      ) {
        recoveryWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };

    recoveryClose.onclick = () => {
      recoveryWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    /*     recoveryBtn.onclick = () => {
      recoveryWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    }; */
  }
}

export function forgotPassword() {
  if (document.querySelector(".popup-modal-forgotPassword")) {
    $(function () {
      $(".popup-modal-forgotPassword").magnificPopup({
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

export function personal() {}

export function validationPopups() {
  const enterEmail = document.querySelector(".enter__email_js");
  const enterPassword = document.querySelector(".enter__password_js");
  const enterBtn = document.querySelector(".enter__btn_js");

  function validateEmail(value) {
    const re =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(value);
  }
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

  $(".maskPhone").mask("+7 (Z00) 000-00-00", {
    translation: {
      Z: { pattern: /[0-69-9]/ },
    },
  });

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
