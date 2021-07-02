export function catalogPopups() {
  const btnPopular = document.querySelector(".catalogCardsPopularLink__js");
  const popularItem = document.querySelectorAll(".catalogCardsPopularItem__js");
  const popupPopular = document.querySelector(".catalogCardsPopularPopup__js");
  const btnText = document.querySelector(".catalogCardsPopularLinkText__js");
  const label = document.querySelectorAll(".catalogCardsPopularLabel__js");

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

  const btnAlphabet = document.querySelector(".catalogCardsAlphabetLink__js");
  const popupAlphabet = document.querySelector(
    ".catalogCardsAlphabetPopup__js"
  );
  const letter = document.querySelectorAll(".catalogCardsAlphabetLetter__js");
  const linkText = document.querySelector(
    ".catalogCardsAlphabetTextChecked__js"
  );
  const btnAll = document.querySelector(".catalogCardsAlphabetAll__js");
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
        if (item.classList.contains("catalogCardsAlphabet__letter_checked")) {
          item.classList.remove("catalogCardsAlphabet__letter_checked");
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

export function checkNum() {
  const numbers = document.querySelectorAll(".paginationNumber__js");
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
