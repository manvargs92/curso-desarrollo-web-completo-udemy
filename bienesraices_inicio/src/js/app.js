document.addEventListener("DOMContentLoaded", function () {
    eventListeners();
    darkMode();
});

function darkMode() {
/******* Leer preferencias del navegador ******************************************/
    const preferredDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

    // console.log(preferredDarkMode.matches);
    if (preferredDarkMode.matches) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }

    preferredDarkMode.addEventListener("change", function () {
        if (preferredDarkMode.matches) {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
        }
    });
/**********************************************************************************/

    const botonDarkMode = document.querySelector(".dark-mode-boton");

    botonDarkMode.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector(".mobile-menu");

    mobileMenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector(".navegacion");

    if (navegacion.classList.contains("mostrar")) {
        navegacion.classList.remove("mostrar");
    } else {
        navegacion.classList.add("mostrar");
    }
    // navegacion.classList.toggle("mostrar");// hace lo mismo de arriba en una sola línea

}