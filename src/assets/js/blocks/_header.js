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
    $(function () {
      $(".popup-modal").magnificPopup({
        type: "inline",
        preloader: false,
        modal: false,
        showCloseBtn: false,
      });
      slick.slick("refresh");
      $(document).on("click", ".popup-modal-dismiss", function (e) {
        $.magnificPopup.close();
      });
    });
  }
}

export function clubCardPopup() {
  if (document.querySelector(".clubCard__btn_js")) {
    const clubCardWrapper = document.querySelector(".clubCardWindow_js");
    const clubCradPopup = document.querySelector(".clubCardWindow__popup_js");
    const clubCardClose = document.querySelector(".clubCardWindow__close_js");
    const clubCardWindowBtn = document.querySelector(".clubCardWindow__btn_js");
    const clubCardBtn = document.querySelector(".clubCard__btn_js");
    const agreementCheck = document.querySelector(".check_js");

    clubCardBtn.onclick = () => {
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

    clubCardWindowBtn.onclick = () => {
      clubCardWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

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
    const authorizationBtn = document.querySelector(
      ".headerTop__authorization_js"
    );
    const enterBtnPopup = document.querySelector(".enter__btn_js");
    const regBtnPopup = document.querySelector(".reg__btn_js");
    const personalWrapper = document.querySelector(".personal_js");
    const authorizationWrapper = document.querySelector(".authorization_js");
    const authorizationPopup = authorizationWrapper.querySelector(
      ".authorization__popup_js"
    );
    const authorizationClose = authorizationWrapper.querySelector(
      ".authorization__close_js"
    );
    const forgotWindowBtn = document.querySelector(".authorization__forgot_js");
    const forgotWrapper = document.querySelector(".forgotPassword_js");

    forgotWindowBtn.onclick = () => {
      authorizationWrapper.classList.add("hidden");
      forgotWrapper.classList.remove("hidden");
    };

    authorizationBtn.onclick = () => {
      authorizationWrapper.classList.remove("hidden");
      document.body.classList.add("hiddenHeaderCatalog");
    };

    authorizationWrapper.onclick = (e) => {
      if (
        authorizationPopup &&
        e.target !== authorizationPopup &&
        !authorizationPopup.contains(e.target)
      ) {
        authorizationWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };

    authorizationClose.onclick = () => {
      authorizationWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    enterBtnPopup.onclick = () => {
      authorizationWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    regBtnPopup.onclick = (e) => {
      e.preventDefault();
      authorizationWrapper.classList.add("hidden");
      personalWrapper.classList.remove("hidden");
    };

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
    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        regBtnPopup.disabled = false;
      } else {
        regBtnPopup.disabled = true;
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

    recoveryBtn.onclick = () => {
      recoveryWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
  }
}

export function forgotPassword() {
  if (document.querySelector(".clubCard__btn_js")) {
    const forgotWindowBtn = document.querySelector(".authorization__forgot_js");
    const forgotWrapper = document.querySelector(".forgotPassword_js");
    const forgotPopup = forgotWrapper.querySelector(
      ".forgotPassword__popup_js"
    );
    const forgotClose = forgotWrapper.querySelector(
      ".forgotPassword__close_js"
    );
    const forgotBtn = forgotWrapper.querySelector(".forgotPassword__btn_js");
    const rememberBtn = forgotWrapper.querySelector(
      ".forgotPassword__remember_js"
    );

    forgotWrapper.onclick = (e) => {
      if (
        forgotPopup &&
        e.target !== forgotPopup &&
        !forgotPopup.contains(e.target)
      ) {
        forgotWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };

    forgotClose.onclick = () => {
      forgotWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    forgotBtn.onclick = () => {
      forgotWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    rememberBtn.onclick = () => {
      forgotWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
  }
}

export function personal() {
  if (document.querySelector(".reg__btn_js")) {
    const personalWrapper = document.querySelector(".personal_js");
    const personalPopup = personalWrapper.querySelector(".personal__popup_js");
    const personalClose = personalWrapper.querySelector(".personal__close_js");
    const personalBtn = personalWrapper.querySelector(".personal__btn_js");
    const personalSkipBtn = personalWrapper.querySelector(".personal__skip_js");

    personalWrapper.onclick = (e) => {
      if (
        personalPopup &&
        e.target !== personalPopup &&
        !personalPopup.contains(e.target)
      ) {
        personalWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };

    personalClose.onclick = () => {
      personalWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    personalBtn.onclick = () => {
      personalWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };

    personalSkipBtn.onclick = () => {
      personalWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
  }
}

export function magnificPopup() {}
