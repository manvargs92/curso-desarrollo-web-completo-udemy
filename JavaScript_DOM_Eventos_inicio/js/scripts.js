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


window.onscroll = function (evento) {
    console.log(evento);
    console.log("Haciendo scroll...");
}


// Seleccionar elementos y asociarles un evento

// const btnEnviar = document.querySelector(".boton--primario");

// btnEnviar.addEventListener("click", function (evento) {
//     console.log(evento);
//     evento.preventDefault(); // evita que se recargue la ventana al hacer click en el botón Enviar
//     console.log("Enviar formulario...");
// });


// Eventos de los inputs y textarea

const datos = {
    nombre: "",
    email: "",
    mensaje: ""
}

const nombre = document.querySelector("#nombre");
const email = document.querySelector("#email");
const mensaje = document.querySelector("#mensaje");

// nombre.addEventListener("change", function () { // valida que se haya escrito algo
//     console.log("Escribiendo....");
// });

// nombre.addEventListener("input", function (evento) { // input - valida que se esté escribiendo en tiempo real
//     console.log(evento.target.value);
//     console.log("Escribiendo en tiempo real....");
// });

// email.addEventListener("input", function (evento) {
//     console.log(evento.target.value);
// });

// mensaje.addEventListener("input", function (evento) {
//     console.log(evento.target.value);
// });

nombre.addEventListener("input", leerTexto);
email.addEventListener("input", leerTexto);
mensaje.addEventListener("input", leerTexto);

function leerTexto(evento) {
    console.log(evento.target.value);

    datos[evento.target.id] = evento.target.value;

    console.log(datos);
}

// El evento de submit

const formulario = document.querySelector(".formulario"); // si se escucha un submit debe asignarse a un formulario, NO a un botón
formulario.addEventListener("submit", function (evento) { // submit es para formularios
    evento.preventDefault();

    // validar el formulario
    const {nombre, email, mensaje} = datos;

    if (nombre === "" || email === "" || mensaje === "") {
        mostrarError("Aún hay campos vacíos; todos los campos son obligatorios.");
        return; // return corta la ejecución del código
    }

    // Crear la alerta de Enviar correctamente
    mostrarCorrecto("Formulario enviado correctamente.");

    // Enviar el formulario

    console.log("Enviando fromulario...");
});

// Muestra un error en pantalla
function mostrarError(mensaje) {
    const error = document.createElement("P");
    error.textContent = mensaje;
    error.classList.add("error");

    formulario.appendChild(error);

    // Desaparezca después de 5 segundos
    setTimeout(() => {
        error.remove(); //.remove elimina elementos HTML
    }, 5000);

    console.log(error);
}

// Muestra alerta de formulario enviado correctamente
function mostrarCorrecto(mensaje) {
    const correcto = document.createElement("P");
    correcto.textContent = mensaje;
    correcto.classList.add("correcto");
    formulario.appendChild(correcto);

    setTimeout(() => {
        correcto.remove();
    }, 5000);

    console.log(correcto);
}


// Organización del código
// 1. Todas las variables en la parte superior
// 2. Después, todos los eventlisteners
// 3. De último todas las funciones