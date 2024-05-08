<?php
require "includes/funciones.php";

// include "./includes/templates/header.php";
incluirTemplate("header", $pagInicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Aenean ac blandit sapien. Maecenas eu ipsum augue. Vivamus tincidunt, erat vitae dictum malesuada,
                    nunc est eleifend nisl, sit amet dignissim nunc dui eu velit. Donec viverra at neque nec tempus. Ut
                    ornare ultricies purus et condimentum. Cras sodales accumsan lacinia. In pulvinar arcu egestas leo
                    porttitor mattis.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Aenean ac blandit sapien. Maecenas eu ipsum augue. Vivamus tincidunt, erat vitae dictum malesuada,
                    nunc est eleifend nisl, sit amet dignissim nunc dui eu velit. Donec viverra at neque nec tempus. Ut
                    ornare ultricies purus et condimentum. Cras sodales accumsan lacinia. In pulvinar arcu egestas leo
                    porttitor mattis.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Aenean ac blandit sapien. Maecenas eu ipsum augue. Vivamus tincidunt, erat vitae dictum malesuada,
                    nunc est eleifend nisl, sit amet dignissim nunc dui eu velit. Donec viverra at neque nec tempus. Ut
                    ornare ultricies purus et condimentum. Cras sodales accumsan lacinia. In pulvinar arcu egestas leo
                    porttitor mattis.
                </p>
            </div>
        </div><!-- .iconos-nosotros -->
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php
        $limiteMostradas = 3;
        include "includes/templates/anuncios.php";
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section><!-- .seccion .contenedor -->

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y
                            ahorrando dinero
                        </p>
                    </a>
                </div>
            </article><!-- .entrada-blog -->

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para
                            darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article><!-- .entrada-blog -->
        </section><!-- .blog -->

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote><!-- para citas -->
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                    cumple con todas mis espectativas.
                </blockquote>
                <p>- Juan De la Torre</p>
            </div>
        </section>
    </div>

<?php
// include "./includes/templates/footer.php";
incluirTemplate("footer");
?>