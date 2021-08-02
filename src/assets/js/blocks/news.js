export function newsCategories() {
  if (document.querySelector(".news__allnews_js")) {
    const news = document.querySelector(".news");
    const btnAllNews = news.querySelector(".newsHeader__all_js");
    const btnMasterClass = news.querySelector(".newsHeader__master_js");
    const containerAll = news.querySelector(".news__allnews_js");
    const containerMaster = news.querySelector(".news__master_js");

    btnAllNews.onclick = () => {
      btnAllNews.classList.add("newsHeader__item_checked");
      btnMasterClass.classList.remove("newsHeader__item_checked");
      containerAll.classList.remove("hidden");
      containerMaster.classList.add("hidden");
    };
    btnMasterClass.onclick = () => {
      btnAllNews.classList.remove("newsHeader__item_checked");
      btnMasterClass.classList.add("newsHeader__item_checked");
      containerAll.classList.add("hidden");
      containerMaster.classList.remove("hidden");
    };
  }
}
