<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

/* If */
if ($autenticado) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicie sesión";
}

echo "<br>";

if ($autenticado || $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicie sesión";
}

echo "<br>";

if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicie sesión";
}

echo "<br>";

/* If anidados */
$cliente = [
    "nombre" => "Paco",
    "saldo" => 0,
    "informacion" => [
        "tipo" => "Premium"
    ]
];

if (!empty($cliente)) {
    echo "El arreglo de Cliente no está vacío.";

    if ($cliente["saldo"] > 0) {
        echo "El cliente tiene saldo disponible.";
    } else {
        echo "No hay saldo.";
    }
} else {
    echo "El arreglo de Cliente está vacío.";
}

echo "<br>";

/* Else if */
if ($cliente["saldo"] > 0) {
    echo "El cliente tiene saldo.";
} else if ($cliente["informacion"]["tipo"] === "Premium") {
    echo "El cliente es Premium.";
} else {
    echo "No hay cliente definido o no tiene saldo o no es Premium";
}

echo "<br>";

/* Switch */
$tecnologia = "HTML";

switch ($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje.";
        break;
    case "JavaScript":
        echo "Genial, el lenguaje de la Web.";
        break;
    case "HTML":
        echo "No es un lenguaje de programación.";
        break;
    default:
        echo "Algún lenguaje que no sé cual es.";
        break;
}

include 'includes/footer.php';