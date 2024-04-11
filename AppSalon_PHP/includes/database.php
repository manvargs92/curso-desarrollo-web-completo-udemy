<?php

/* Conectarse a una BD */
$db = mysqli_connect("localhost", "root", "Mexico123", "appsalon");

echo "<pre>";
var_dump($db);
echo "</pre>";

if (!$db) {
    echo "Error en la conexión con la BD.";
    exit; // evita que se siga ejecutando código
} else {
    echo "Conexión exitosa con la BD.";
}