export function footerScrollUp() {
  const buttonUp = document.querySelector(".footerButtonUp__js");

  buttonUp.addEventListener("click", function backToTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(backToTop, 0);
    }
  });
}

export function footerValidationEmail() {
  const footerInput = document.querySelector(".footerSubscribeInput__js");
  const footerButtonEmail = document.querySelector(".footerSubscribeButton__js");
  const footerError = document.querySelector(".footerSubscribeError__js");
  const footerPopap = document.querySelector(".windowsMessage__js");
  const footerPopapWindow = document.querySelector(".windowsMessagePopap__js");
  const footerPopapClose = document.querySelector(".windowsMessageClose__js");

  function validateEmail(value) {
    const re =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(value);
  }

function scrollOffOn(){
  return document.body.classList.toggle("hiddenHeaderCatalog");
}

  function closePopap(e) {
    if (
      footerPopapWindow &&
      e.target !== footerPopapWindow &&
      !footerPopapWindow.contains(e.target)
    ) {
      footerPopap.classList.add("hidden");
      scrollOffOn()
      document.removeEventListener("click", closePopap);
    }
    
  }
  footerInput.addEventListener("click", () =>{
    footerError.classList.add("hidden");
  })

  footerButtonEmail.addEventListener("click", (event) => {
    event.preventDefault();
    if (validateEmail(footerInput.value)) {
      scrollOffOn()
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
    scrollOffOn()
    document.removeEventListener("click", closePopap);
  });
}
