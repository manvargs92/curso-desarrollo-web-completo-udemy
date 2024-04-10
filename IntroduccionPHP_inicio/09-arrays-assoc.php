<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Manuel",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium"
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

/* Acceder a un elemento */
echo "<pre>";
var_dump($cliente["nombre"]);
echo "</pre>";

echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["informacion"]["tipo"];

echo "<br>";

/* Agregar un elemento al arreglo */
$cliente["codigo"] = 8746020681;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

/* Modificar un elemento del arreglo */
$cliente["nombre"] = "AAAAA";
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';