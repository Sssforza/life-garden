export function articles() {
  $(".helpfulCard__btn").each((item, i) => {
    $(i).hover(
      function () {
        $(".helpfulCard").has(i).addClass("helpfulCard_hover");
      },

      function () {
        $(".helpfulCard").removeClass("helpfulCard_hover");
      }
    );
  });
  $(".articles__readAll_js").on("click", () => {
    $(".articles__box_js").toggleClass("articles__box_open");
  });

  $(".articles__item_js").each((i, item) => {
    $(item).on("click", () => {
      $(".articles__item_js").each((i, el) =>
       $(el).removeClass("articles__item_check")
      );
      $(item).addClass("articles__item_check");
    });
  });
}
