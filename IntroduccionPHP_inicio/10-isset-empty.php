<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Juan", "Karen");
$cliente = [
    "nombre" => "Pedrito",
    "saldo" => 200
];

/* Empty - revisar si un arreglo está o no vacío */
var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

echo "<br>";

/* Isset - revisar si una propiedad o un arreglo ha sido creado o está definido */
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

echo "<br>";

/* Isset - también permite revisar si una propiedad de unarreglo existe */
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["codigoCliente"]));
var_dump(isset($clientes3[100]));

include 'includes/footer.php';