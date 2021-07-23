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
    const quickViewBtn = document.querySelectorAll(
      ".cardProduct__quickView_js"
    );
    const quickViewWrapper = document.querySelector(".quickViewWrapper_js");
    const quickViewPopup = document.querySelector(".quickViewPopup_js");
    const quickViewClose = document.querySelector(".quickViewClose_js");
    const quickViewSmallImg = document.querySelectorAll(".quickView__small_js");
    const quickViewBigImg = document.querySelector(".quickView__big_js");

    quickViewBtn.forEach((item) => {
      item.onclick = () => {
        slick.slick("refresh");
        quickViewWrapper.classList.remove("hidden");
        document.body.classList.add("hiddenHeaderCatalog");
      };
    });
    quickViewWrapper.onclick = (e) => {
      if (
        quickViewPopup &&
        e.target !== quickViewPopup &&
        !quickViewPopup.contains(e.target)
      ) {
        quickViewWrapper.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
      }
    };
    quickViewClose.onclick = () => {
      quickViewWrapper.classList.add("hidden");
      document.body.classList.remove("hiddenHeaderCatalog");
    };
    quickViewSmallImg.forEach((item) => {
      item.addEventListener("click", () => {
        quickViewSmallImg.forEach((el) => {
          el.classList.remove("productCard__checked");
        });
        quickViewBigImg.src = item.src;
        item.classList.add("productCard__checked");
        });
    });
  }
}
