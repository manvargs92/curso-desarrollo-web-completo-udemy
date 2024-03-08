// Objetos

const nombreProducto = "Monitor 20 pulgadas.";
const precio = 300;
const disponible = true;

const productoObjeto = {
    nombreProducto: "Monitor 30\"",
    precio: 600,
    disponible: true
}

console.log(productoObjeto);

// acceder a las propiedades del objeto

console.log(productoObjeto.precio);
console.log(productoObjeto.nombreProducto);
console.log(productoObjeto.disponible);

console.log(productoObjeto["precio"]);
console.log(productoObjeto["nombreProducto"]);
console.log(productoObjeto["disponible"]);


// Modificar Objetos

productoObjeto.imagen = "imagen.jpg"; // agregar nuevas propiedades
console.log(productoObjeto);

delete productoObjeto.disponible; // eliminar propiedades
console.log(productoObjeto);