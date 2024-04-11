<?php include 'includes/header.php';

$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "Televisión 24\"",
        "precio" => 400,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor Curvo",
        "precio" => 300,
        "disponible" => false
    ]
];

foreach ($productos as $producto) {
?>

<li>
    <p>Producto: <?php echo $producto["nombre"]; ?> </p>
    <p>Precio: <?php echo "$" . $producto["precio"] ?> </p>
    <p> <?php echo ($producto["disponible"]) ? "Disponible": "No disponible" ?> </p> <!-- operador ternario-->
    <?php
        if ($producto["disponible"]) {
            echo "<p>Disponible</p>";
        } else {
            echo "<p>No disponible</p>";
        }
    ?>
</li>

<?php
    // echo "<pre>";
    // var_dump($producto);
    // echo "</pre>";
}

include 'includes/footer.php';