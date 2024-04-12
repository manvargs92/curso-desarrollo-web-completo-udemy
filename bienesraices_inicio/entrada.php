<?php
include "./includes/templates/header.php";
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
       
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
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
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2024 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>

</body>

</html>