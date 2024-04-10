<?php include 'includes/header.php';

/* in_array - buscar elementos en una arreglo */
$carrito = ["Tablet", "Computadora", "Televisión"];

var_dump(in_array("Tablet", $carrito));
var_dump(in_array("Audífonos", $carrito));

/* Ordenar los elementos de un arreglo */
$numeros = array(1,3,4,5,1,2);
sort($numeros); // ordenar de menor a mayor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

rsort($numeros); // ordenar de mayor amenor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

/* Ordenar arreglo asociativo */
$cliente = array(
    "saldo" => 200,
    "tipo" => "Premium",
    "nombre" => "Paco"
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); // ordena los valores, primero los números y luego los strings por orden alfabético

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); // ordena las llaves por orden alfabético

echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente); // ordena los valores, primero los string por orden alfabético inverso y luego los números
krsort($cliente); // ordena las llaves por orden alfabético inverso

include 'includes/footer.php';