// Funciones con parámetros y argumentos

function sumar(numero1, numero2) { // los parámetros se deben declarar entre los ()
    console.log(numero1 + numero2);
}

sumar(10, 10); // argumentos o los valores reales
sumar(3, 3);
sumar(3, 6);
sumar(2, 1);

const sumar2 = function(numero1, numero2) {
    console.log(numero1 + numero2);
}

sumar2(5, 10);


function restar(n1 = 0, n2 = 0) { // parámetros por defecto
    console.log(n1 - n2);
}

console.log(4); // tomará el valor antes declarado por defecto