export function headerCatalog () {
    const buttonCatalog = document.querySelector('.headerMiddleCatalog__js')
    const headerCatalog = document.querySelector('.headerCatalog__js')
    const hamburger = document.querySelector('.hamburger__js')
 
    buttonCatalog.addEventListener("click", () => {
        headerCatalog.classList.toggle("headerCatalog__go")
        hamburger.classList.toggle("is-active")
    })
};
export function headerSearchelp () {
    const headerInput = document.querySelector('.headerMiddleInput__js')
    console.log(headerInput);
};