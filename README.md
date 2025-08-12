# curso-desarrollo-web-completo-udemy
Curso: Desarrollo Web Completo visto en Udemy

## Extensiones VS Code usadas
- Live Server

## Configuraciones
- Linked Editing    Activarlo en las configuraciones de VS Code para actualizar las etiquetas html de cierre
- Shift + Alt + F   Reacomodar párrafos largos

## Notas
- Algunas etiquetas html apertura y cierre y otras no tienen cierre
- Las etiquetas h1, h2, etc, indican al navegador el contenido más importante de la página web, usualmente el logo o el nombre del sitio web
- Solo debe de haber una etiqueta h1 por cada página (archivo html) del sitio web
- Etiqueta img para mostrar imágenes, no tiene etiqueta de cierre, src="" indica la ruta dentro del proyecto
- Flexbox
    - Especialmente diseñado para alinear los elementos
    - Funciona de izquierda a derecha o de arriba hacia abajo, pero solamente en una dirección
    - flex-direction: column    flexbox de arriba hacia abajo
        - align-items   para alinear el flexbox verical
- Estilos para escribir CSS:
    - BEM (Bloques, Elementos, Modificadores)
```
.card {}
.card__titulo {}
.card__imagen {}
.card__boton {}
.card__boton--activo {}
```
    - Utility First: crear clases con una sola propiedad que describe lo que hace
```
.texto-centrado {}
.color-rojo-100 {}
.fondo-azul-200 {}
.p-2 {}
.m-2 {}
    ```
    - Módulos: defines una clase padre y vas seleccionando las etiquetas del html
```
.card {}
.card h2 {}
.card img {}
.card a {}
```

## Sitios web útiles
- https://www.lipsum.com
- https://tablericons.com
- https://heroicons.com
- https://fontawesome.com
- Cualquier calculadora de rems a px
- https://www.w3schools.com
- https://fonts.google.com
- https://necolas.github.io/normalize.css/