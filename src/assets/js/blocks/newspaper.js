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
 /*  $(".catalogCoverPdf_airports").flipBook({
    pdfUrl: "/dist/pdf/newspaper.pdf",
    lightBox: true,
  }); */
  /* if (document.querySelector(".newspaperBody__cover")) {
    const cover = document.querySelectorAll(".newspaperBody__cover");
    const windowPdf = document.querySelector(".windowPdf_js");
    const pdfCurrent = windowPdf.querySelector(".newspaperPdf__currentPage_js");
    const pdfMax = windowPdf.querySelector(".newspaperPdf__maxPage_js");

    function pdfLoad() {
      var myState = {
        pdf: null,
        currentPage: 1,
        zoom: 1,
      };
      pdfjsLib.getDocument("/dist/pdf/newspaper.pdf").then((pdf) => {
        myState.pdf = pdf;
        render();
        pdfMax.textContent = myState.pdf._pdfInfo.numPages;
      });
      function render() {
        myState.pdf.getPage(myState.currentPage).then((page) => {
          var canvas = document.getElementById("pdf_renderer");
          var ctx = canvas.getContext("2d");
          var viewport = page.getViewport(myState.zoom);

          canvas.width = viewport.width;
          canvas.height = viewport.height;
          page.render({
            canvasContext: ctx,
            viewport: viewport,
          });
        });
      }
      document.getElementById("go_previous").addEventListener("click", (e) => {
        if (myState.pdf == null || myState.currentPage == 1) return;
        myState.currentPage -= 1;
        pdfCurrent.textContent = myState.currentPage;
        render();
      });
      document.getElementById("go_next").addEventListener("click", (e) => {
        if (
          myState.pdf == null ||
          myState.currentPage > myState.pdf._pdfInfo.numPages
        )
          return;
        console.log(myState.pdf._pdfInfo.numPages);
        myState.currentPage += 1;
        pdfCurrent.textContent = myState.currentPage;
        render();
      });
      document.getElementById("zoom_in").addEventListener("click", (e) => {
        if (myState.pdf == null) return;
        myState.zoom += 0.1;
        render();
      });
      document.getElementById("zoom_out").addEventListener("click", (e) => {
        if (myState.pdf == null) return;
        myState.zoom -= 0.1;
        render();
      });
    }

    cover.forEach((item) => {
      item.onclick = () => {
        windowPdf.classList.remove("hidden");
        pdfLoad();
      };
    });
  } */
}
