export function headerCatalog () {
    const buttonCatalog = document.querySelector('.headerMiddleCatalog__js')
    const headerBottom = document.querySelector('.headerBottom__js')
    const headerCatalog = document.querySelector('.headerCatalog__js')
    const hamburger = document.querySelector('.hamburger__js')
    
    buttonCatalog.addEventListener("click", () => {
        headerCatalog.classList.toggle("headerCatalog__go")
       /*  headerBottom.classList.toggle("hidden") */
        hamburger.classList.toggle("is-active")
    })
};