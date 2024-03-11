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

// Hoisting y diferencia entre el tipo de fucniones
/* JS se ejecuta en 2 vueltas; en la primeta vuelta (vuelta de registro) se registran todas
las fucniones, y en la segunda vuelta (vuelta de ejecución), se registran las llamadas
a las funciones y se ejecutan.*/
ejemplo1();

function ejemplo1() {
    console.log("Esta función se ejecuta a pesar de ser declarada después de su llamada.");
}

ejemplo2();

const ejemplo2 = function () {
    console.log("Esta función NO se ejecuta ya que es tomada como una variable.");
}