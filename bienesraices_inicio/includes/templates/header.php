<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binenes Raíces</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>

<body>

    <header class="header <?php echo isset($pagInicio) ? "inicio" : ""; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <!-- <a href="/"> --><!-- lleva a la página principal-->
                <a href="./">
                    <img class="logo" src="build/img/logo.svg" alt="Logotipo de Bienes Raíces">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="Icono menú responsive">
                </div>

                <nav class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </nav>
            </div><!-- .barra -->

            <?php if ($pagInicio) { ?>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div><!-- .contenedor .contenido-header-->
    </header>