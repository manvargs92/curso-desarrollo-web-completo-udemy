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

        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img src="/imagenes/1ccc3f259e5aa17ff7af8f7ab5aae5b2.jpg" class="imagen-tabla"></td>
                    <td>$1200000</td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a href="#" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

<?php
incluirTemplate("footer");
?>