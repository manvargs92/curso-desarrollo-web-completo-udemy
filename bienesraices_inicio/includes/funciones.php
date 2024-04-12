<?php

require "app.php";

function incluirTemplate(string $nombre, bool $pagInicio = false) {
    // include "./includes/templates/{$nombre}.php";
    include TEMPLATES_URL . "/{$nombre}.php";
}