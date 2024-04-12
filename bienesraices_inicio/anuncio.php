<?php
include "./includes/templates/header.php";
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="Ícono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Ícono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="Ícono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

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

<?php
include "./includes/templates/footer.php"
?>