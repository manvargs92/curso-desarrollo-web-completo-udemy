<?php

function obtenerServicios () {
    try {

        // importar las credenciales de conexión
        require "database.php";

        // consulta de SQL
        $sql = "SELECT * FROM servicios;";

        // realizar la consulta
        $consulta = mysqli_query($db, $sql);

        // acceder a los resultados
        echo "<pre>";
        var_dump(mysqli_fetch_assoc($consulta));
        echo "</pre>";

        // cerrar la conexión (opcional)
        $resultado = mysqli_close($db);

        echo $resultado;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerServicios();