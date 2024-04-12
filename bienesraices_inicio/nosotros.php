<?php
include "./includes/templates/header.php";
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="buld/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
        
                <p>
                    Fusce eros est, sodales a libero vel, tristique efficitur massa. Morbi enim neque, ultrices vel nibh in,
                    fermentum sagittis ligula. In ut augue ex. Sed scelerisque enim pretium elit facilisis, non placerat purus
                    lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam
                    eleifend tempus lectus ac dignissim. Duis urna metus, efficitur ut quam id, efficitur iaculis ipsum. Mauris
                    commodo turpis id varius eleifend. Donec ultrices venenatis nisi, vel hendrerit elit blandit sed. Cras
                    lobortis viverra massa, vel vehicula leo ultrices ac.
                </p>
                <p>
                    Aenean mi erat, consequat eget tortor ac, cursus vulputate quam. Morbi pellentesque, elit eget pulvinar
                    facilisis, nisl diam gravida mi, at finibus sem eros interdum nulla. Fusce cursus orci ac mi auctor
                    hendrerit. Suspendisse eget convallis diam. Vestibulum mattis sapien non mauris cursus vehicula.
                    Pellentesque sed iaculis enim.
                </p>
            </div><!-- .texto-nosotros -->
        </div><!-- .contenido-nosotros -->

        <section class="contenedor seccion">
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
        </section><!-- .contenedor .seccion -->
    </main>

<?php
include "./includes/templates/footer.php"
?>