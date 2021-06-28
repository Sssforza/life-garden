export function footerScrollUp() {
  const buttonUp = document.querySelector(".footer__buttonUp");

  buttonUp.addEventListener("click", function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  });
}

export function footerValidationEmail() {
  const footerInput = document.querySelector(".footer__subscribeInput");
  const footerButtonEmail = document.querySelector(".footer__subscribeButton");
  const footerError = document.querySelector(".footer__subscribeError");
  const footerPopap = document.querySelector(".footer__wrap");
  const footerPopapWindow = document.querySelector(".footer__popap");
  const footerPopapClose = document.querySelector(".footer__popapClose");

  function validateEmail(value) {
    const re =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(value);
  }

  function closePopap(e) {
    if (
      footerPopapWindow &&
      e.target !== footerPopapWindow &&
      !footerPopapWindow.contains(e.target)
    ) {
      footerPopap.classList.add("hidden");
      document.removeEventListener("click", closePopap);
    }
    
  }
  footerInput.addEventListener("click", () =>{
    footerError.classList.add("hidden");
  })

  footerButtonEmail.addEventListener("click", (event) => {
    event.preventDefault();

    if (validateEmail(footerInput.value)) {
      footerError.classList.add("hidden");
      footerPopap.classList.remove("hidden");
      setTimeout(() => {
        document.addEventListener("click", closePopap);
      }, 0)

    } else {
      footerError.classList.remove("hidden");
    }
  });

  footerPopapClose.addEventListener("click", () => {
    footerPopap.classList.add("hidden");
    document.removeEventListener("click", closePopap);
  });
}
