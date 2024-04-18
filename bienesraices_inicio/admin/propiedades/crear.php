<?php
/* Base de datos */
require "../../includes/config/database.php";
$db = conectarDB();
// var_dump($db);

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

/* Mensajes de error */
$errores = [];

/* Ejecutar el código después de que el usuario envíe el formulario */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = $_POST["titulo"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $habitaciones = $_POST["habitaciones"];
    $banos = $_POST["banos"];
    $estacionamiento = $_POST["estacionamiento"];
    $vendedorId = $_POST["vendedorId"];

    /* Validador de campos */
    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }
    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }
    if (strlen($descripcion) < 50) {
        $errores[] = "La descripcion es obligatoria, y debe tener al menos 50 caracteres";
    }
    if (!$habitaciones) {
        $errores[] = "El número de habitaciones es obligatorio";
    }
    if (!$banos) {
        $errores[] = "El número de baños es obligatorio";
    }
    if (!$estacionamiento) {
        $errores[] = "El número de lugares de estacionamiento es obligatorio";
    }
    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }
    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    /* Revisar que el arreglo de $errores esté vacío */
    if (empty($errores)) {

    /* Insertar en la BD */
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, banos, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$banos', '$estacionamiento', '$vendedorId');";
        // echo $query;
    
        $resultado = mysqli_query($db, $query);
    
        if ($resultado) {
            echo "Insertado correctamente.";
        }

    }


}


require "../../includes/funciones.php";
incluirTemplate("header");
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <?php
        foreach ($errores as $error) {
            ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php
        }        
        ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad"><!-- name sirve para leer lo que el usuario escriba en el campo -->

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="banos">Baños:</label>
                <input type="number" id="banos" name="banos" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedorId">
                    <option value="" disabled selected>-- Seleccione un vendedor --</option>
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>
            <input class="boton boton-verde" type="submit" value="Crear Propiedad">
        </form>
    </main>

<?php
incluirTemplate("footer");
?>