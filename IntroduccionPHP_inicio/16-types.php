<?php
declare(strict_types=1);
include 'includes/header.php';

// función que retorna valores
function usuarioAutenticado (bool $autenticado) : string { // : indica que tipo de dato será retornado
    if ($autenticado) {
        return "El usuario está autenticado";
    } else {
        return "No autenticado";
    }
}

$usuario = usuarioAutenticado(false);

echo $usuario;

function imprimir () : void { //: void indica que no retornará ningún valor
    echo "<br>Esta función solo imprime este string";
}

imprimir();

function usuarioAutenticado2 (bool $autenticado) : ?string { // : ? indica que el tipo de dato retornado será opcional
    if ($autenticado) {
        return "El usuario está autenticado";
    } else {
        return null;
    }
}

echo "<br>" . usuarioAutenticado2(false);

function usuarioAutenticado3 (bool $autenticado) : string | int { // : | indica los tipos de datos que podrán ser retornados
    if ($autenticado) {
        return "El usuario está autenticado";
    } else {
        return 20;
    }
}

echo "<br>" . usuarioAutenticado3(false);




include 'includes/footer.php';