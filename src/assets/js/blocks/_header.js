export function headerCatalog() {
  const header = document.querySelector(".header");
  const buttonCatalog = document.querySelector(".headerMiddleCatalog__js");
  const headerCatalog = document.querySelector(".headerCatalog__js");
  const hamburger = document.querySelector(".hamburger__js");
  const wrapper = document.querySelector(".wrapper");

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
