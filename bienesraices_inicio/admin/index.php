<?php
/* Importar la conexión a la BD */
require "../includes/config/database.php";
$db = conectarDB();

/* Escribir el query */
$query = "SELECT * FROM propiedades";

/* Consultar la BD */
$resultadoConsulta = mysqli_query($db, $query);

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
// exit;

/* Muestra mensaje condicional */
// $mensaje = $_GET["mensaje"];
$resultado = $_GET["resultado"] ?? null; // ?? - si no existe el valor de la izq, le asigna el de la der

/* Incluir un template */
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
        <?php elseif(intval($resultado) === 2): ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
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
            <tbody> <!-- mostrar los resultados -->
                <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <tr>
                    <td><?php echo $propiedad["id"]; ?></td>
                    <td><?php echo $propiedad["titulo"]; ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad["imagen"]; ?>" class="imagen-tabla"></td>
                    <td>$<?php echo $propiedad["precio"]; ?></td>
                    <td>
                        <a href="#" class="boton-rojo-block">Eliminar</a>
                        <a
                        href="admin/propiedades/actualizar.php?id=<?php echo $propiedad["id"]; ?>" 
                        class="boton-amarillo-block">
                            Actualizar
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

<?php
/* Cerrar la conexión a la BD */
mysqli_close($db);

incluirTemplate("footer");
?>