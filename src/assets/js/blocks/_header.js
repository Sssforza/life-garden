export function headerCatalog() {
  const buttonCatalog = document.querySelector(".headerMiddleCatalog__js");
  const headerCatalog = document.querySelector(".headerCatalog__js");
  const hamburger = document.querySelector(".hamburger__js");

  buttonCatalog.addEventListener("click", () => {
    headerCatalog.classList.toggle("headerCatalog__go");
    document.body.classList.toggle("hiddenHeaderCatalog");
    hamburger.classList.toggle("is-active");
  });
}
export function headerSearchelp() {
  const headerHelp = document.querySelector(".headerHelp__js");
  const headerForm = document.querySelector(".headerMiddleForm__js");
  document.addEventListener("click", function (e) {
    if (headerHelp && e.target !== headerHelp && !headerHelp.contains(e.target)) {
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
  const basketClick = document.querySelector(".headerBasket__js");
  const basketPop = document.querySelector(".headerClickBasket__js");
  const preorderClick = document.querySelector(".headerPreorder__js");
  const preorderPop = document.querySelector(".headerClickPreorder__js");

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

  basketClick.addEventListener('click', (e) => {
    
    if (basketPop.classList.contains("hidden")) {
      document.removeEventListener("click", closeBasket);
    }
    basketPop.classList.toggle("hidden");
    setTimeout(() => {
      document.addEventListener("click", closeBasket);
    }, 0);
  })


  preorderClick.addEventListener('click', () => {
    if (preorderPop.classList.contains("hidden")) {
      document.removeEventListener("click", closePreorder);
    }
    preorderPop.classList.toggle("hidden");
    setTimeout(() => {
      document.addEventListener("click", closePreorder);
    }, 0);
  })

}

export function headerScroll() {
  const headerTop = document.querySelector('.headerTop')
  window.onscroll = function() {
    if (window.pageYOffset > 1) {
      headerTop.classList.add('headerTop__hidden');
    } else {
      headerTop.classList.remove('headerTop__hidden');
    }

  }
}

export function headerOpenClient() {
  const headerTopClient = document.querySelector('.client__js')
  const btnClient = document.querySelector('.clientClick__js')

  btnClient.addEventListener('click', () => {
    headerTopClient.classList.toggle('headerTop__client_open')
  })
}