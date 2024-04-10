<?php include 'includes/header.php';

$nombreCliente = "    Fulanito Mengano     ";

/* Conocer la longitud de un string */
echo strlen($nombreCliente);

echo "<br>";

/* Eliminar espacios en blanco al inicio y al final */
$texto = trim($nombreCliente);
echo strlen($texto);

echo "<br>";

/* Convetir a mayúsculas */
echo strtoupper($nombreCliente);

echo "<br>";

/* Convertir a minúsculas */
echo strtolower($nombreCliente);

echo "<br>";

/* Reemplazar parte de un string */
$nombreCliente2 = "Fulano Sotano";
echo str_replace("Fulano", "F", $nombreCliente2);

echo "<br>";

/* Validar si existe el string */
echo strpos($nombreCliente2, "Fulano"); // regresará la posición en dónde se encuentra la palabra dentro del string
echo strpos($nombreCliente2, "Juan"); // no imprimirá nada

echo "<br>";

/* Concatenar strings */
$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente2 . " es " . $tipoCliente . ".";
echo "<br>";
echo "El cliente {$nombreCliente2} es {$tipoCliente}."; // solo gunciona con comillas dobles ("")

include 'includes/footer.php';