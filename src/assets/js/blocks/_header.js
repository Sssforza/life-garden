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
    const header = document.querySelector(".header");
    const headerHelp = header.querySelector(".headerHelp_js");
    const headerForm = header.querySelector(".headerMiddleForm_js");
    const headerInput = header.querySelector(".headerMiddleInput_js");
    const closeheaderInput = header.querySelector(".closeXs_js");
    const clearHeaderInput = header.querySelector(".headerMiddle__clear_js");

    headerInput.onfocus = () => {
        if (window.innerWidth < 1400) {
            header.classList.add("header_mobile");
            headerHelp.classList.remove("hidden");
            document.body.classList.add("hiddenHeaderCatalog");
        }
    };
    closeheaderInput.onclick = () => {
        header.classList.remove("header_mobile");
        headerHelp.classList.add("hidden");
        document.body.classList.remove("hiddenHeaderCatalog");
    };

    clearHeaderInput.onclick = () => {
        clearHeaderInput.classList.add("hidden");

        headerInput.value = "";
    };

    document.addEventListener("click", function (e) {
        if (window.innerWidth >= 1400) {
            if (
                headerHelp &&
                e.target !== headerHelp &&
                !headerHelp.contains(e.target)
            ) {
                headerHelp.classList.add("hidden");
            }
        }
    });
    headerForm.addEventListener("input", function (event) {
        if (window.innerWidth >= 1400) {
            if (event.target.value.length >= 2) {
                headerHelp.classList.remove("hidden");
            } else {
                headerHelp.classList.add("hidden");
            }
        } else {
            if (event.target.value.length >= 2) {
                clearHeaderInput.classList.remove("hidden");
            } else {
                clearHeaderInput.classList.add("hidden");
            }
        }
    });
}

export function headerClick() {
    const basketClick = document.querySelector(".headerBasket_js");
    const basketPop = document.querySelector(".headerClickBasket_js");
    const preorderClick = document.querySelector(".headerPreorder_js");
    const preorderPop = document.querySelector(".headerClickPreorder_js");

    function closeBasket(e) {
        if (
            basketPop &&
            e.target !== basketPop &&
            !basketPop.contains(e.target)
        ) {
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

    function closeClient(e) {
        if (
            headerTopClient &&
            e.target !== headerTopClient &&
            !headerTopClient.contains(e.target)
        ) {
            headerTopClient.classList.remove("headerTop__client_open");
        }
    }

    btnClient.addEventListener("click", () => {
        if (!headerTopClient.classList.contains("headerTop__client_open")) {
            document.removeEventListener("click", closeClient);
        }
        headerTopClient.classList.toggle("headerTop__client_open");
        setTimeout(() => {
            document.addEventListener("click", closeClient);
        }, 0);
    });
}
export function headerOpenElse() {
    const menuElse = document.querySelector(".headerTop__menuHide_js");
    const btnElse = document.querySelector(".headerTop__menuElse_js");

    function closeElse(e) {
        if (menuElse && e.target !== menuElse && !menuElse.contains(e.target)) {
            menuElse.classList.remove("headerTop__menuHide_open");
        }
    }

    btnElse.addEventListener("click", () => {
        if (!menuElse.classList.contains("headerTop__menuHide_open")) {
            document.removeEventListener("click", closeElse);
        }
        menuElse.classList.toggle("headerTop__menuHide_open");
        setTimeout(() => {
            document.addEventListener("click", closeElse);
        }, 0);
    });
}

export function headerMenuMobile() {
    const headerMenuMobile = document.querySelector(".headerMenuMobile_js");
    const hamburger = document.querySelector(".hamburgerXs_js");

    hamburger.addEventListener("click", () => {
        headerMenuMobile.classList.toggle("headerMenuMobile_open");
        document.body.classList.toggle("hiddenHeaderCatalog");
        hamburger.classList.toggle("is-active");
    });

    const headerMobileCabinet = document.querySelector(
        ".headerMobileCabinet_js"
    );

    headerMobileCabinet.addEventListener("click", () => {
        headerMobileCabinet.classList.toggle("headerMobileCabinet_open");
    });

    const headerCatalogMobile = document.querySelector(
        ".headerCatalogMobile_js"
    );

    headerCatalogMobile.addEventListener("click", () => {
        headerCatalogMobile.classList.toggle("headerCatalogMobile_open");
    });
}
