export function footerScrollUp() {
  const buttonUp = document.querySelector(".footerButtonUp_js");

  buttonUp.addEventListener("click", function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  });
}

export function footerValidationEmail() {
  const footerInput = document.querySelector(".footerSubscribeInput_js");
  const footerButtonEmail = document.querySelector(
    ".footerSubscribeButton_js"
  );
  const footerError = document.querySelector(".footerSubscribeError_js");
  const footerPopap = document.querySelector(".windowsMessage_js");
  const footerPopapWindow = document.querySelector(".windowsMessagePopap_js");
  const footerPopapClose = document.querySelector(".windowsMessageClose_js");

  function validateEmail(value) {
    const re =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(value);
  }

  function scrollOffOn() {
    return document.body.classList.toggle("hiddenHeaderCatalog");
  }

  function closePopap(e) {
    if (
      footerPopapWindow &&
      e.target !== footerPopapWindow &&
      !footerPopapWindow.contains(e.target)
    ) {
      footerPopap.classList.add("hidden");
      scrollOffOn();
      document.removeEventListener("click", closePopap);
    }
  }
  footerInput.addEventListener("click", () => {
    footerError.classList.add("hidden");
  });

  footerButtonEmail.addEventListener("click", (event) => {
    event.preventDefault();
    if (validateEmail(footerInput.value)) {
      scrollOffOn();
      footerError.classList.add("hidden");
      footerPopap.classList.remove("hidden");
      setTimeout(() => {
        document.addEventListener("click", closePopap);
      }, 0);
    } else {
      footerError.classList.remove("hidden");
    }
  });

  footerPopapClose.addEventListener("click", () => {
    footerPopap.classList.add("hidden");
    scrollOffOn();
    document.removeEventListener("click", closePopap);
  });
}
