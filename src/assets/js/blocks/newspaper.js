export function newspaperPopup() {
  if (document.querySelector(".newspaperHeader__last_js")) {
    const lastBtn = document.querySelector(".newspaperHeader__last_js");
    const archive = document.querySelector(".newspaperHeader__archive_js");
    const archiveYearBtn = archive.querySelector(".newspaperHeader__btn");
    const archiveYear = archive.querySelector(".newspaperHeader__btn_year");
    const archivePopup = archive.querySelector(".newspaperHeader__years_js");
    const archiveYearClick = archive.querySelectorAll(
      ".newspaperHeader__year_js"
    );

    lastBtn.onclick = () => {
      lastBtn.classList.add("newspaperHeader__item_checked");
      archive.classList.remove("newspaperHeader__item_checked");
    };
    archive.onclick = () => {
      lastBtn.classList.remove("newspaperHeader__item_checked");
      archive.classList.add("newspaperHeader__item_checked");
      archive.classList.toggle("newspaperHeader__item_open");
    };

    document.onclick = function (e) {
      if (
        archivePopup &&
        e.target !== archivePopup &&
        e.target !== archiveYearBtn &&
        e.target !== archiveYear &&
        !archivePopup.contains(e.target)
      ) {
        archive.classList.remove("newspaperHeader__item_open");
      }
    };

    archiveYearClick.forEach((item) => {
      item.onclick = () => {
        archiveYear.textContent = item.textContent;
      };
    });
  }
}
export function pdfLoader() {
/*   $(".newspaperOne").flipBook({
    pdfUrl: "/dist/pdf/newspaper.pdf",
    lightBox: true,
  }); */
  
}
