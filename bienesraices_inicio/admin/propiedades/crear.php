<?php
/* Base de datos */
require "../../includes/config/database.php";
$db = conectarDB();
// var_dump($db);

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

/* Consulta para obtener los vendedores */
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

/* Mensajes de error */
$errores = [];

$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$banos = "";
$estacionamiento = "";
// $vendedorId = "";
$vendedores_id = "";

/* Ejecutar el código después de que el usuario envíe el formulario */
if ($_SERVER["REQUEST_METHOD"] === "POST") { // $_SERVER - devuelve información un poco más detallada del servidor

    /*********** Filtros ************/
    // $numero = "correo@correo.com?";
    // $numero2 = 1;

    /* Filtros para Sanitizar */
    // $resultado = filter_var($numero, FILTER_SANITIZE_NUMBER_INT); // filter_var - función que filtra una variable
    // $resultado = filter_var($numero, FILTER_SANITIZE_STRING);
    // $resultado = filter_var($numero, FILTER_SANITIZE_EMAIL);

    // /* Filtros para Validar */
    // $resultado = filter_var($numero2, FILTER_VALIDATE_INT);

    // var_dump($resultado);

    // exit;
    /******************************* */

    // echo "<pre>";
    // var_dump($_POST); // devuelve información cuando enviamos una petición de tipo POST en el formulario
    // echo "</pre>";

    echo "<pre>";
    var_dump($_FILES); // ver el contenido de los archivos
    echo "</pre>";

    // exit;

    $titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
    $precio = mysqli_real_escape_string($db, $_POST["precio"]);
    $descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
    $habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
    $banos = mysqli_real_escape_string($db, $_POST["banos"]);
    $estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
    $vendedores_id = mysqli_real_escape_string($db, $_POST["vendedores_id"]);
    $creado = date("Y/m/d");

    // Asignar files hacia una variable
    $imagen = $_FILES["imagen"];

    // var_dump($imagen["name"]);

    // exit;

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
    if (!$vendedores_id) {
        $errores[] = "Elige un vendedor";
    }

    if (!$imagen["name"]) {
        $errores[] = "La imagen es obligatoria";
    }

    // Validar por tamaño (1 Mb máximo)
    $medida = 1000 * 1000;

    if ($imagen["size"] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";

    /* Revisar que el arreglo de $errores esté vacío */
    if (empty($errores)) {

        /* Subida de archivos */
        // crear una carpeta
        $carpetaImagenes = "../../imagenes/";

        if (!is_dir($carpetaImagenes)) { // is_dir - retorna si un directorio existe o no
            mkdir($carpetaImagenes);
        }

        // Generar un nombre único
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
        var_dump($nombreImagen);

        // subir la imagen
        move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);

        // exit;

    /* Insertar en la BD */
        $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, banos, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$banos', '$estacionamiento', '$creado', '$vendedores_id');";
        // echo $query;
    
        $resultado = mysqli_query($db, $query);
    
        if ($resultado) {
            // echo "Insertado correctamente.";

            /* Redireccionar al usuario */
            // header("Location: /admin?mensaje=Registrado Correctamente&registrado=1"); // ? enviar datos por medio de la url
            header("Location: /admin?resultado=1"); // ? enviar datos por medio de la url
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

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data"><!-- enctype - atributo para enviar los archivos cuando el  método del formulario es POST -->
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>"><!-- name sirve para leer lo que el usuario escriba en el campo -->

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

                <label for="banos">Baños:</label>
                <input type="number" id="banos" name="banos" placeholder="Ej: 3" min="1" max="9" value="<?php echo $banos ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedores_id">
                    <option value="" disabled selected>-- Seleccione un vendedor --</option>
                    <!-- <option value="1">Juan</option>
                    <option value="2">Karen</option> -->
                    <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedores_id === $vendedor["id"] ? "selected" : ""; ?> value="<?php echo $vendedor["id"] ?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"]; ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>
            <input class="boton boton-verde" type="submit" value="Crear Propiedad">
        </form>
    </main>

<?php
incluirTemplate("footer");
?>