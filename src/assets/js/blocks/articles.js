export function articles() {
  $(".helpfulCard__btn").each((item, i) => {
    $(i).hover(
      function () {
        if($(".helpfulCard").has(i)){
        $(".helpfulCard").addClass("helpfulCard_hover");}
      },
      function () {
        $(".helpfulCard").removeClass("helpfulCard_hover");
      }
    );
  })


}
