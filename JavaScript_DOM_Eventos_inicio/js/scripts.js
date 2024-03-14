// querySelector

const heading = document.querySelector(".header__texto h2"); // querySelector retorna 0 o 1 elementos
console.log(heading);

heading.textContent = "Nuevo Heading"; // modificar contenido de la etiqueta

heading.classList.add("nueva-clase"); // agregar una nueva clase a la etiqueta


// querySelectorAll

const enlaces = document.querySelectorAll(".navegacion a"); // querySelectorAll retorna 0 o todos los elementos que concuerden con el selector
console.log(enlaces);
console.log(enlaces[0]); // seleccionar un elemento en específico

enlaces[0].textContent = "Nuevo texto para Enlace";
// document.querySelectorAll(".navegacion a")[0].textContent = "Nuevo texto para Enlace"; // hace lo mismo en una sola línea
enlaces[0].href = "https://www.google.com/"; // modificar el hipervínculo de un enlace
enlaces[0].classList.add("nueva-clase");
// enlaces[0].classList.remove("navegacion__enlace"); // remover una clase a la etiqueta


// getElementById
// esta forma y no se utiliza tanto en las nuevas versiones de JS
const heading2 = document.getElementById("heading");
console.log(heading2);


// createElement
// Generar un nuevo enlace
const nuevoEnlace = document.createElement("A");

// Agregar el href
nuevoEnlace.href = "nuevo-enlace.html";

// Agregar el texto
nuevoEnlace.textContent = "Un Nuevo Enlace";

// agregar la calse
nuevoEnlace.classList.add("navegacion__enlace");

// agregar el nuevo elemento HTML al documento
const nevegacion = document.querySelector(".navegacion");
nevegacion.appendChild(nuevoEnlace);

console.log(nuevoEnlace);


// Eventos en JS

console.log(1);

// escuchar un evento ocurra
window.addEventListener("load", function () { // load espera a que el JS, el HTML y todos los archivos esté completamente cargados
    console.log(2);
});
// window.addEventListener("load", imprimir); // forma sin callback

window.onload = function () { // onload espera a que el JS, el HTML y todos los archivos esté completamente cargados
    console.log(3);
}

document.addEventListener("DOMContentLoaded", function () { // DOMContentLoaded solo espera a que se descargue el HTML, pero no espera CSS o imágenes
    console.log(4);
})

console.log(5);

function imprimir() {
    console.log(2);
}


window.onscroll = function () {
    console.log("Haciendo scroll...");
}
