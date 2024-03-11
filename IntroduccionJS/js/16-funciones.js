// Funciones en JavaScript

function sumar() { // declarar una fucnión
    console.log(10 + 10);
}

sumar(); // llamada a la función

// Expresión de la función

const sumar2 = function() {
    console.log(3 + 3);
}

sumar2();

// IIFE funciones que se llaman a ellas solas
// previenen que se puedan llamar a las variables desde otro archivo JS
(function () {
    console.log("Esta es una función IIFE.");
})();