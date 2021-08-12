export function checkSearchCategories() {
    const clickCategories = document.querySelectorAll(
        ".searchCategories__li_js"
    );
    const blockCategories = document.querySelectorAll(
        ".searchFind__container_js"
    );

    clickCategories.forEach((item) => {
        item.addEventListener("click", () => {
            clickCategories.forEach((el) => {
                el.classList.remove("searchCategories_checked");
            });
            item.classList.add("searchCategories_checked");
            blockCategories.forEach((element) => {
                if (item.id === element.id) {
                    element.classList.remove("hidden");
                } else {
                    element.classList.add("hidden");
                }
            });
        });
    });
}
