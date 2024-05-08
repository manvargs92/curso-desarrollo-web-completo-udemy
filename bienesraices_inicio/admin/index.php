<?php

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"]; // el POST no va a existir hasta que se envíe el REQUEST_METHOD
    $id = filter_var($id, FILTER_VALIDATE_INT); // valida que el value sea un int y no se le pueda pasar una cadena ej. "delete * from propiedades"

    if ($id) {
        // Eliminar el archivo
        $query = "SELECT imagen FROM propiedades WHERE id = ${id};";

        $resultado = mysqli_query($db, $query);
        $propiedad = mysqli_fetch_assoc($resultado);

        unlink("../imagenes/" . $propiedad["imagen"]);

        // Eliminar la propiedad
        $query = "DELETE FROM propiedades WHERE id = ${id};";
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header("location: /admin?resultado=3");
        }
    }

    var_dump($id);
}

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
        <?php elseif(intval($resultado) === 3): ?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p>
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
                        <form method="POST">
                            <input type="hidden" name="id" value="<?php echo $propiedad["id"]; ?>"><!-- input hidden - no es visible pero tiene el id que queremos eliminar; enviar datos de forma oculta -->
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
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