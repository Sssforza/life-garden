export function reviewCheck() {
  const feedbackStars = document.querySelectorAll(".review__item_js");
  const feedbackEstimation = document.querySelector(".feedbackEstimation__text_js");
  feedbackStars.forEach((star, index) => {
    star.onclick = () => {
        feedbackStars.forEach((element) => {
        element.classList.remove("active");
      });
      for (let i = 0; i <= index; i++) {
        feedbackStars[i].classList.add('active')
      }
      if(index === 0){
        feedbackEstimation.textContent = 'Ужасно'
      }
      if(index === 1){
        feedbackEstimation.textContent = 'Плохо'
      }
      if(index === 2){
        feedbackEstimation.textContent = 'Неплохо'
      }
      if(index === 3){
        feedbackEstimation.textContent = 'Хорошо'
      }
      if(index === 4){
        feedbackEstimation.textContent = 'Отлично'
      }
    };
  });

  const feedbackComment = document.querySelector(".feedback__comment_js");
  const feedbackBtn = document.querySelector(".feedback__btn_js");
  feedbackBtn.onclick = (e) => {
      e.preventDefault()
      if(feedbackComment.value.length === 0) {
        feedbackComment.classList.add("envelopeInput__textarea_error")
      } else {
        feedbackComment.classList.remove("envelopeInput__textarea_error")
        console.log('super');
      }
  }
}
