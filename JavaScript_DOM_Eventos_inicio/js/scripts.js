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
enlaces[0].classList.remove("navegacion__enlace"); // remover una clase a la etiqueta


// getElementById