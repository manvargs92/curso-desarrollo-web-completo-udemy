<?php 

declare(strict_types=1); // ejecutar el código de forma estricta

include 'includes/header.php';


// Definir una función
function sumar() {
    echo 3 + 4;
}

function sumar2($numero1, $numero2) { //argumentos
    echo $numero1 + $numero2;
}

function sumar3($numero1 = 0, $numero2 = 0) { //argumentos con parámetros por defecto
    echo $numero1 + $numero2;
}

function sumar4(int $numero1 = 0, int $numero2 = 0) { //argumentos con tipado
    echo $numero1 + $numero2;
}

// Llamar a una función
sumar2(10, 20); // parámetros

echo "<br>";

/* Parámetros nombrados */
function restar(int $numero1, int $numero2) {
    echo $numero1;

    echo $numero2;
}

restar(numero2: 30, numero1: 10); // parámetros nombrados


include 'includes/footer.php';