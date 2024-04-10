<?php include 'includes/header.php';

$carrito = ["Tablet", "Televisión", "Conputadora"];

$carrito2 = array();

/* Visualizar el contenido de un array */
echo "<pre>"; // dar formato al var_dump
var_dump($carrito);
echo "</pre>";

/* Acceder a un elemento de un array */
echo "<pre>";
var_dump($carrito[1]);
echo "</pre>";

echo $carrito[1];

/* Añadir elemento a un arreglo del cual se conoce su tamaño */
$carrito[3] = "Nuevo Producto...";

echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Añadir un elemento nuevo al final del arreglo */
array_push($carrito, "Audífonos");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Añadir un elemento nuevo al inicio del arreglo */
array_unshift($carrito, "Smartwatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Otra forma de crear arrays */
$clientes = array("Cliente 1", "Cliente 2", "Cliente 3");

echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';