
document.addEventListener("DOMContentLoaded", function () {
    iniciarApp();
});

function iniciarApp() {
    crearGaleria();
}

function crearGaleria() {
    const galeria = document.querySelector(".galeria-imagenes");
    
    for (let i = 1; i <= 12; i++) {
        const imagen = document.createElement("picture");
        imagen.innerHTML = `
            <source srcset="build/img/thumb/${i}.avif" type="image/avif">
            <source srcset="build/img/thumb/${i}.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="build/img/thumb/${i}.jpg" alt="Imagen galería">
        `;

        // imagen.onclick = mostrarImagen(i);
        imagen.onclick = function () { // función ejecutada como callback para ejecutar mas de una acción
            mostrarImagen(i);
        }
        
        galeria.appendChild(imagen);
    }
}

function mostrarImagen(id) {
    // console.log("mostrando imagen..", id);
    const imagen = document.createElement("picture");
    imagen.innerHTML = `
        <source srcset="build/img/grande/${id}.avif" type="image/avif">
        <source srcset="build/img/grande/${id}.webp" type="image/webp">
        <img loading="lazy" width="200" height="300" src="build/img/grande/${id}.jpg" alt="Imagen galería">
    `;

    /* Crea el overlay con la imágen */
    const overlay = document.createElement("DIV");
    overlay.appendChild(imagen);
    overlay.classList.add("overlay");
    overlay.onclick = function () {
        const body = document.querySelector("body");
        body.classList.remove("fijar-body"); // remueve el bloqueo del scroll dando clic en cualquier parte
        overlay.remove();
    }

    /* Botón para cerrar la ventana modal */
    const cerrarModal = document.createElement("P");
    cerrarModal.textContent = "X";
    cerrarModal.classList.add("btn-cerrar");
    cerrarModal.onclick = function () { // función ejecutada como callback para ejecutar mas de una acción
        const body = document.querySelector("body");
        body.classList.remove("fijar-body"); // remueve el bloqueo del scroll cuando se cierra la imágen con el botón X
        overlay.remove();
    }
    overlay.appendChild(cerrarModal);

    /* Añadir el ovelay al HTML */
    const body = document.querySelector("body");
    body.appendChild(overlay);
    body.classList.add("fijar-body");
}