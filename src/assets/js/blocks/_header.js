export function headerCatalog() {
  const buttonCatalog = document.querySelector(".headerMiddleCatalog__js");
  const headerCatalog = document.querySelector(".headerCatalog__js");
  const hamburger = document.querySelector(".hamburger__js");

  buttonCatalog.addEventListener("click", () => {
    headerCatalog.classList.toggle("headerCatalog__go");
    hamburger.classList.toggle("is-active");
  });
}
export function headerSearchelp() {
  const headerHelp = document.querySelector(".headerHelp__js");
  const headerForm = document.querySelector(".headerMiddleForm__js");
  headerForm.addEventListener("input", function (event) {
    if (event.target.value.length >= 2) {
      headerHelp.classList.remove("hidden");
    } else {
      headerHelp.classList.add("hidden");
    }
  });
}
