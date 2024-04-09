<?php include 'includes/header.php';

$nombre = "Juan";

// $99usuarios = 99;// sintaxis no válida
$usuarios99 = 99;

$_nombre = "Manuel";
$nombre_ = "Ana";

echo $nombre;
var_dump($nombre); // imprime más información sobre la variable

$nombre = "Juan 2"; // las variables se pueden reasignar
echo $nombre;

define("constante", "Este es el valor de la constante"); // definir constantes
echo constante; // imprimir una constante

const constante2 = "Hola 2"; // otra forma de definir constantes, esta sintaxis no es común
echo constante2;

$nombreCliente = "Pedro";
$nombre_cliente = "Pedro";

include 'includes/footer.php';