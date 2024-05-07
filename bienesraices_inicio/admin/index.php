<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
// exit;

// $mensaje = $_GET["mensaje"];
$resultado = $_GET["resultado"] ?? null; // ?? - si no existe el valor de la izq, le asigna el de la der
require "../includes/funciones.php";
incluirTemplate("header");
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>

        <?php
        // if ($mensaje) {
        //     echo $mensaje;
        // }
        ?>

        <?php if(intval($resultado) === 1): ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Popiedad</a>
    </main>

<?php
incluirTemplate("footer");
?>