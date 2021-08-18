export function priceSlider() {
    if (document.getElementById("slider")) {
        const slider = document.getElementById("slider");
        const input0 = document.getElementById("input-0");
        const input1 = document.getElementById("input-1");

        const inputs = [input0, input1];

        noUiSlider.create(slider, {
            start: [500, 99999],
            connect: true,
            step: 1,
            range: {
                min: 1000,
                max: 30000,
            },
        });

        slider.noUiSlider.on("update", function (values, handle) {
            inputs[handle].value = Math.round(values[handle]);
        });

        const setSlider = (i, value) => {
            let arr = [null, null];
            arr[i] = value;
            slider.noUiSlider.set(arr);
        };

        inputs.forEach((el, index) => {
            el.addEventListener("change", (e) => {
                setSlider(index, e.currentTarget.value);
            });
        });
    }
}

export function catalogPopups() {
    if (document.querySelector(".catalogCardsPopularLink_js")) {
        const btnPopular = document.querySelector(
            ".catalogCardsPopularLink_js"
        );
        const popularItem = document.querySelectorAll(
            ".catalogCardsPopularItem_js"
        );
        const popupPopular = document.querySelector(
            ".catalogCardsPopularPopup_js"
        );
        const btnText = document.querySelector(
            ".catalogCardsPopularLinkText_js"
        );
        const label = document.querySelectorAll(".catalogCardsPopularLabel_js");

        function closePopapPopular(e) {
            if (
                popupPopular &&
                e.target !== popupPopular &&
                !popupPopular.contains(e.target)
            ) {
                popupPopular.classList.add("hidden");
                document.removeEventListener("click", closePopapPopular);
            }
        }

        btnPopular.addEventListener("click", () => {
            if (popupPopular.classList.contains("hidden")) {
                document.removeEventListener("click", closePopapPopular);
            }
            popupPopular.classList.toggle("hidden");
            setTimeout(() => {
                document.addEventListener("click", closePopapPopular);
            }, 0);
        });

        popularItem.forEach((item) => {
            item.addEventListener("click", () => {
                setTimeout(() => {
                    popupPopular.classList.toggle("hidden");
                    document.removeEventListener("click", closePopapPopular);
                }, 300);
            });
        });

        label.forEach((item) => {
            item.addEventListener("click", () => {
                setTimeout(() => {
                    btnText.textContent = item.textContent;
                    popupPopular.classList.toggle("hidden");
                    document.removeEventListener("click", closePopapPopular);
                }, 300);
            });
        });

        const btnAlphabet = document.querySelector(
            ".catalogCardsAlphabetLink_js"
        );
        const popupAlphabet = document.querySelector(
            ".catalogCardsAlphabetPopup_js"
        );
        const letter = document.querySelectorAll(
            ".catalogCardsAlphabetLetter_js"
        );
        const linkText = document.querySelector(
            ".catalogCardsAlphabetTextChecked_js"
        );
        const btnAll = document.querySelector(".catalogCardsAlphabetAll_js");
        const arrowOpen = document.querySelector(".open");
        const arrowClose = document.querySelector(".close");

        function closePopapAlph(e) {
            if (
                popupAlphabet &&
                e.target !== popupAlphabet &&
                !popupAlphabet.contains(e.target)
            ) {
                popupAlphabet.classList.add("hidden");
                document.removeEventListener("click", closePopapAlph);
            }
        }
        function arrowChange() {
            if (popupAlphabet.classList.contains("hidden")) {
                arrowClose.classList.add("hidden");
                arrowOpen.classList.remove("hidden");
            } else {
                arrowOpen.classList.add("hidden");
                arrowClose.classList.remove("hidden");
            }
        }

        btnAlphabet.addEventListener("click", () => {
            arrowChange();
            if (popupAlphabet.classList.contains("hidden")) {
                document.removeEventListener("click", closePopapAlph);
            }
            popupAlphabet.classList.toggle("hidden");
            setTimeout(() => {
                document.addEventListener("click", closePopapAlph);
            }, 0);
        });

        btnAll.addEventListener("click", () => {
            setTimeout(() => {
                arrowChange();
                linkText.textContent = "все";
                popupAlphabet.classList.toggle("hidden");
            }, 300);
        });

        letter.forEach((element) => {
            element.addEventListener("click", () => {
                letter.forEach((item) => {
                    if (
                        item.classList.contains(
                            "catalogCardsAlphabet__letter_checked"
                        )
                    ) {
                        item.classList.remove(
                            "catalogCardsAlphabet__letter_checked"
                        );
                    }
                });
                element.classList.add("catalogCardsAlphabet__letter_checked");

                setTimeout(() => {
                    arrowChange();
                    linkText.textContent = element.textContent;
                    popupAlphabet.classList.toggle("hidden");
                }, 300);
            });
        });
    }
}

export function checkNum() {
    const numbers = document.querySelectorAll(".paginationNumber_js");
    numbers.forEach((element) => {
        element.addEventListener("click", () => {
            numbers.forEach((item) => {
                if (item.classList.contains("pagination_checked")) {
                    item.classList.remove("pagination_checked");
                }
            });
            element.classList.add("pagination_checked");
        });
    });
}

export function filters() {
    if (document.querySelector(".arrowLink-open")) {
        if (window.innerWidth >= 1024) {
            const arrowLinkOpen = document.querySelector(".arrowLink-open");
            const arrowLinkClose = document.querySelector(".arrowLink-close");
            const arrowColorOpen = document.querySelector(".arrowColor-open");
            const arrowColorClose = document.querySelector(".arrowColor-close");
            const arrowSortOpen = document.querySelector(".arrowSort-open");
            const arrowSortClose = document.querySelector(".arrowSort-close");
            const arrowStockOpen = document.querySelector(".arrowStock-open");
            const arrowStockClose = document.querySelector(".arrowStock-close");
            const arrowShowOpen = document.querySelector(".arrowShow-open");
            const arrowShowClose = document.querySelector(".arrowShow-close");
            //функция изменения стрелки при открытии
            function arrowOpen(open, close) {
                open.classList.remove("hidden");
                close.classList.add("hidden");
            }
            function arrowClose(open, close) {
                open.classList.add("hidden");
                close.classList.remove("hidden");
            }
            const link = document.querySelectorAll(".catalogMenu__link");
            link.forEach((element) => {
                element.addEventListener("click", () => {
                    link.forEach((item) => {
                        if (
                            item.classList.contains("catalogMenu__link_checked")
                        ) {
                            item.classList.remove("catalogMenu__link_checked");
                        }
                    });
                    element.classList.add("catalogMenu__link_checked");
                });
            });

            const showMore = document.querySelector(".catalogMenuShow_js");
            const showMoreLinks = document.querySelector(
                ".catalogMenuLinks_js"
            );
            const showMoreText = document.querySelector(".catalogMenuText_js");

            showMore.addEventListener("click", () => {
                showMoreLinks.classList.toggle("catalogMenu__links_open");
                if (
                    showMoreLinks.classList.contains("catalogMenu__links_open")
                ) {
                    showMoreText.textContent = "Свернуть";
                    arrowOpen(arrowLinkOpen, arrowLinkClose);
                } else {
                    showMoreText.textContent = "Показать еще";
                    arrowClose(arrowLinkOpen, arrowLinkClose);
                }
            });

            const down = document.querySelector(".catalogMenuDown_js");
            const container = document.querySelector(
                ".catalogMenuContainer_js"
            );
            const stockDown = document.querySelector(".catalogStockDown_js");
            const stockContainer = document.querySelector(
                ".catalogStockContainer_js"
            );
            const colorDown = document.querySelector(".catalogColorDown_js");
            const colorContainer = document.querySelector(
                ".catalogColorContainer_js"
            );
            const showMoreSmall = document.querySelector(
                ".catalogMenuSmall_js"
            );
            const showTextSmall = document.querySelector(
                ".catalogMenuTextSmall_js"
            );
            const items = document.querySelector(".catalogMenuItems_js");

            down.addEventListener("click", () => {
                arrowClose(arrowStockOpen, arrowStockClose);
                arrowClose(arrowColorOpen, arrowColorClose);
                container.classList.toggle("catalogMenu__container_open");
                stockContainer.classList.remove("catalogMenu__container_open");
                colorContainer.classList.remove("catalogMenu__container_open");
                if (
                    container.classList.contains("catalogMenu__container_open")
                ) {
                    arrowOpen(arrowSortOpen, arrowSortClose);
                } else {
                    arrowClose(arrowSortOpen, arrowSortClose);
                }
            });

            stockDown.addEventListener("click", () => {
                arrowClose(arrowSortOpen, arrowSortClose);
                arrowClose(arrowColorOpen, arrowColorClose);
                stockContainer.classList.toggle("catalogMenu__container_open");
                colorContainer.classList.remove("catalogMenu__container_open");
                container.classList.remove("catalogMenu__container_open");
                if (
                    stockContainer.classList.contains(
                        "catalogMenu__container_open"
                    )
                ) {
                    arrowOpen(arrowStockOpen, arrowStockClose);
                } else {
                    arrowClose(arrowStockOpen, arrowStockClose);
                }
            });

            colorDown.addEventListener("click", () => {
                arrowClose(arrowStockOpen, arrowStockClose);
                arrowClose(arrowSortOpen, arrowSortClose);
                colorContainer.classList.toggle("catalogMenu__container_open");
                container.classList.remove("catalogMenu__container_open");
                stockContainer.classList.remove("catalogMenu__container_open");
                if (
                    colorContainer.classList.contains(
                        "catalogMenu__container_open"
                    )
                ) {
                    arrowOpen(arrowColorOpen, arrowColorClose);
                } else {
                    arrowClose(arrowColorOpen, arrowColorClose);
                }
            });

            showMoreSmall.addEventListener("click", () => {
                items.classList.toggle("catalogMenu__items_big");
                if (items.classList.contains("catalogMenu__items_big")) {
                    showTextSmall.textContent = "Свернуть";
                    arrowOpen(arrowShowOpen, arrowShowClose);
                } else {
                    showTextSmall.textContent = "Показать еще";
                    arrowClose(arrowShowOpen, arrowShowClose);
                }
            });
        }
    }
}

export function filtersMobile() {
    if (document.querySelector(".catalogCards__strainer_js")) {
        const btnFilters = document.querySelector(".catalogCards__strainer_js");
        const btnCategories = document.querySelector(
            ".catalogCards__categories_js"
        );
        const closeFilters = document.querySelectorAll(".closeFilters_js");
        const windowFilters = document.querySelector(".catalogMenu_js");
        btnFilters.onclick = () => {
            windowFilters.classList.add("catalogMenu_filters");
            windowFilters.classList.remove("catalogMenu_categories");
        };
        btnCategories.onclick = () => {
            windowFilters.classList.add("catalogMenu_categories");
            windowFilters.classList.remove("catalogMenu_filters");
        };
        closeFilters.forEach((item) => {
            item.onclick = () => {
                windowFilters.classList.remove("catalogMenu_filters");
                windowFilters.classList.remove("catalogMenu_categories");
                windowSort.classList.remove("catalogMenuContainer__mobile");
                stockContainer.classList.remove("catalogMenuContainer__mobile");
                colorContainer.classList.remove("catalogMenuContainer__mobile");
                document.body.classList.remove("hiddenHeaderCatalog");
                boxContainer.classList.remove("catalogMenuContainer__mobile");
            };
        });

        const btnAlpha = document.querySelector(".catalogCards__alpha_js");
        const windowAlpha = document.querySelector(
            ".catalogCardsAlphaPopup_js"
        );
        const letteralpha = document.querySelectorAll(".catalogMenu__alpha_js");
        letteralpha.forEach((item) => {
            item.addEventListener("click", () => {
                setTimeout(() => {
                    windowAlpha.classList.toggle("hidden");
                    document.removeEventListener("click", closePopapAlpha);
                }, 300);
            });
        });
        function closePopapAlpha(e) {
            if (
                windowAlpha &&
                e.target !== windowAlpha &&
                !windowAlpha.contains(e.target)
            ) {
                windowAlpha.classList.add("hidden");
                document.removeEventListener("click", closePopapAlpha);
            }
        }
        btnAlpha.addEventListener("click", () => {
            if (windowAlpha.classList.contains("hidden")) {
                document.removeEventListener("click", closePopapAlpha);
            }
            windowAlpha.classList.toggle("hidden");
            setTimeout(() => {
                document.addEventListener("click", closePopapAlpha);
            }, 0);
        });
        const windowSort = document.querySelector(
            ".catalogMenuContainer__mobile_js"
        );
        const down = document.querySelector(".catalogMenuDown_js");
        const backDown = document.querySelectorAll(
            ".catalogMenuContainer__back_js"
        );
        const stockDown = document.querySelector(".catalogStockDown_js");
        const stockContainer = document.querySelector(
            ".catalogMenuStock__mobile_js"
        );
        const colorDown = document.querySelector(".catalogColorDown_js");
        const colorContainer = document.querySelector(
            ".catalogMenuColor__mobile_js"
        );
        const categoryContainer = document.querySelectorAll(
            ".catalogMenu__categories_js"
        );
        const boxContainer = document.querySelector(".catalogMenu__box");
        if (window.innerWidth < 1024) {
            down.onclick = () => {
                windowSort.classList.add("catalogMenuContainer__mobile");
            };
            stockDown.onclick = () => {
                stockContainer.classList.add("catalogMenuContainer__mobile");
            };
            colorDown.onclick = () => {
                colorContainer.classList.add("catalogMenuContainer__mobile");
            };
            categoryContainer.forEach((item) => {
                item.onclick = () => {
                    boxContainer.classList.add("catalogMenuContainer__mobile");
                    document.body.classList.add("hiddenHeaderCatalog");
                };
            });
            backDown.forEach((item) => {
                item.onclick = () => {
                    windowSort.classList.remove("catalogMenuContainer__mobile");
                    stockContainer.classList.remove(
                        "catalogMenuContainer__mobile"
                    );
                    colorContainer.classList.remove(
                        "catalogMenuContainer__mobile"
                    );
                    boxContainer.classList.remove(
                        "catalogMenuContainer__mobile"
                    );
                    document.body.classList.remove("hiddenHeaderCatalog");
                };
            });
        }
    }
}
