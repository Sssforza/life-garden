export function articles(){
    $( ".helpfulCard__btn" ).hover(
        function() {
          $(".helpfulCard").addClass("helpfulCard_hover");
        }, function() {
          $(".helpfulCard").removeClass("helpfulCard_hover");;
        }
      );
}