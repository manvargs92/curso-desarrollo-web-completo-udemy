<?php
require "includes/funciones.php";
incluirTemplate("header");
?>

    <main class="contenedor seccion">

        <h2>Casas y Depas en Venta</h2>

        <?php
        $limiteMostradas = 10;
        include "includes/templates/anuncios.php";
        ?>

    </main>

<?php
// include "./includes/templates/footer.php";
incluirTemplate("footer");
?>