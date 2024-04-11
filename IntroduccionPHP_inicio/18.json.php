<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 300,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

/* Convertir un arreglo a JSON */
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

/* Convertir un JSON a arreglo */
$json_array = json_decode($json);

var_dump($json);

var_dump($json_array);

echo "</pre>";



include 'includes/footer.php';