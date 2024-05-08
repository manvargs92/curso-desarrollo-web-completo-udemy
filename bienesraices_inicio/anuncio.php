<?php
// Validar el id
$id = $_GET["id"];
$id = filter_var($id, FILTER_VALIDATE_INT);
// var_dump($id);

if (!$id) {
    header("Location: /");
}

require "includes/funciones.php";
incluirTemplate("header");

// Importar la conexión
require "includes/config/database.php";
$db = conectarDB();

// Consultar
$query = "SELECT * FROM propiedades WHERE id = ${id};";

// Obtener resultado
$resultado = mysqli_query($db, $query);

// echo "<pre>";
// var_dump($resultado->num_rows);
// echo "</pre>";

if ($resultado->num_rows === 0) {
    header("Location: /");
}

$propiedad = mysqli_fetch_assoc($resultado);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad["titulo"]; ?></h1>

            <img loading="lazy" src="imagenes/<?php echo $propiedad["imagen"]; ?>" alt="Imagen de la propiedad">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad["precio"]; ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Ícono wc" loading="lazy">
                    <p><?php echo $propiedad["banos"]; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Ícono estacionamiento" loading="lazy">
                    <p><?php echo $propiedad["estacionamiento"]; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Ícono habitaciones" loading="lazy">
                    <p><?php echo $propiedad["habitaciones"]; ?></p>
                </li>
            </ul>

            <p>
                <?php echo $propiedad["descripcion"]; ?>
            </p>

        </div>
    </main>

<?php
// Cerrar la conexión
mysqli_close($db);

// include "./includes/templates/footer.php";
incluirTemplate("footer");
?>