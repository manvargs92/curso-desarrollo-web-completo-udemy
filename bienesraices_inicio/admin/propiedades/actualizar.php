<?php

// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
/* Validar que sea un id válido en la url */
$id = $_GET["id"];
$idValido = filter_var($id, FILTER_VALIDATE_INT); // valida que el id en la url sea de tipo entero

if (!$idValido) {
    header("Location: /admin");
}

/* Base de datos */
require "../../includes/config/database.php";
$db = conectarDB();

/* Obtener los datos de la propiedad */
$consulta = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

// echo "<pre>";
// var_dump($propiedad);
// echo "</pre>";

/* Consulta para obtener los vendedores */
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

/* Mensajes de error */
$errores = [];

$titulo = $propiedad["titulo"];
$precio = $propiedad["precio"];
$descripcion = $propiedad["descripcion"];
$habitaciones = $propiedad["habitaciones"];
$banos = $propiedad["banos"];
$estacionamiento = $propiedad["estacionamiento"];
$vendedores_id = $propiedad["vendedores_id"];
$imagenPropiedad = $propiedad["imagen"];

/* Ejecutar el código después de que el usuario envíe el formulario */
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

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

    // la imágen deja de ser obligatoria
    // if (!$imagen["name"]) {
    //     $errores[] = "La imagen es obligatoria";
    // }

    // Validar por tamaño (1 Mb máximo)
    $medida = 1000 * 1000;

    if ($imagen["size"] > $medida) {
        $errores[] = "La imagen es muy pesada";
    }

    /* Revisar que el arreglo de $errores esté vacío */
    if (empty($errores)) {
        // crear una carpeta
        $carpetaImagenes = "../../imagenes/";

        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }

        $nombreImagen = "";

        /* Subida de archivos */
        // verificar si ya existe una imágen previa
        if ($imagen["name"]) {
            // Eliminar imágen previa
            unlink($carpetaImagenes . $propiedad["imagen"]); // unlink - función para eliminar archivos

            // Generar un nombre único
            $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
            var_dump($nombreImagen);

            // subir la imagen
            move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);

        } else {
            $nombreImagen = $propiedad["imagen"]; // la imagen previa
        }
        // exit;

    /* Insertar en la BD */
        $query = "UPDATE propiedades SET titulo = '${titulo}', precio = ${precio}, imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, banos = ${banos}, estacionamiento = ${estacionamiento}, vendedores_id =${vendedores_id} WHERE id = ${id};";
    
        // echo $query;
        // exit;

        $resultado = mysqli_query($db, $query);
    
        if ($resultado) {
            /* Redireccionar al usuario */
            header("Location: /admin?resultado=2");
        }
    }
}


require "../../includes/funciones.php";
incluirTemplate("header");
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

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

        <!-- <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data"> -->
        <form class="formulario" method="POST" enctype="multipart/form-data"> <!-- si no se incluye un action, la info se envía al mismo archivo -->
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <img src="/imagenes/<?php echo $imagenPropiedad ?>" alt="" class="imagen-small">

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
                    <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                        <option <?php echo $vendedores_id === $vendedor["id"] ? "selected" : ""; ?> value="<?php echo $vendedor["id"] ?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"]; ?></option>
                    <?php endwhile; ?>
                </select>
            </fieldset>
            <input class="boton boton-verde" type="submit" value="Actualizar Propiedad">
        </form>
    </main>

<?php
incluirTemplate("footer");
?>