export function popupForgotPassword() {
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

export function popupRecoveryPassword() {
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
    }
}

export function popupAuthorization() {
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
        const formReg = document.querySelector(
            ".authorization__registration_js"
        );

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

export function popupClubCard() {
    if (document.querySelector(".clubCard__btn_js")) {
        const clubCardWindowBtn = document.querySelector(
            ".clubCardWindow__btn_js"
        );
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

export function popupQuickView() {
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
        const quickViewSmallImg = document.querySelectorAll(
            ".quickView__small_js"
        );
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

export function popupMasterClass() {
    if (document.querySelector(".popup-modal-masterClassOrder")) {
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

export function popupMap() {
    if (document.querySelector(".showMap_js")) {
        $(function () {
            $(".showMap_js").magnificPopup({
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
