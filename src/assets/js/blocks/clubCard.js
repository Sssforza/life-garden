export function checkClubCard() {
  if (document.querySelector(".clubRegistration__btn_js")) {
    const clubBtn = document.querySelector(".clubRegistration__btn_js");
    const agreementCheck = document.querySelector(".clubCheck_js");

    agreementCheck.onclick = () => {
      agreementCheck.classList.toggle("agreement__checked");
      if (agreementCheck.classList.contains("agreement__checked")) {
        clubBtn.disabled = false;
      } else {
        clubBtn.disabled = true;
      }
    };
  }
}
