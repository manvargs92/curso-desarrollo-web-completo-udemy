<?php include 'includes/header.php';

/* While loop */
$i = 0;

while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<br>";

/* Do While loop */
$j = 0;

do {
    echo $j . "<br>";

    $j++;
} while ($j < 10);

echo "<br>";

/* For loop */
for ($i = 0; $i < 10; $i++) { 
    echo $i . "<br>";
}

/* Prueba Fizz Buzz */
/**
 * multiplos
 * 3 Fizz
 * 5 Buzz
 * 3 y 5 Fizz Buzz
 */
for ($i = 0; $i < 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " - FizzBuzz <br>";
    } else if ($i % 3 == 0) {
        echo $i . " - Fizz <br>";
    } else if ($i % 5 == 0) {
        echo $i . " - Buzz <br>";
    } else {
        echo $i . "<br>";
    }
}

echo "<br>";

/* For each - para recorrer arreglos */
$clientes = ["Pedro", "Juan", "Karen"];

foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}

$cliente = [
    "nombre" => "Juanito",
    "saldo" => 200,
    "tipo" => "Premium"
];

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}


include 'includes/footer.php';