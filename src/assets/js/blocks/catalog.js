export function catalogPopups() {
    const btnPopular = document.querySelector(".catalogCardsPopularLink__js");
    const btnAlphabet = document.querySelector(".catalogCardsAlphabetLink__js");
    const popupPopular = document.querySelector(".catalogCardsPopularPopup__js");
    const popupAlphabet = document.querySelector(".catalogCardsAlphabetPopup__js");
 
  
    btnPopular.addEventListener("click", () => {
        popupPopular.classList.toggle("hidden");
        btnPopular.classList.toggle("catalogCardsPopular__link_black");
     });
    btnAlphabet.addEventListener("click", () => {
        popupAlphabet.classList.toggle("hidden");
     });
  }