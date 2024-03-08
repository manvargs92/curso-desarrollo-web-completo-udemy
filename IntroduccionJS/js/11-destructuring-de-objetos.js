// Destructuring de objetos

const productoObjeto = {
    nombreProducto: "Monitor 30\"",
    precio: 600,
    disponible: true
}

// forma anterior
const precioProducto = productoObjeto.precio;
const nombreDelProducto = productoObjeto.nombreProducto;

console.log(precioProducto);
console.log(nombreDelProducto);

// destructuring (desestructuración, forma actual)
const {precio} = productoObjeto; // extrae el valor y crea la variable en un solo paso
const {nombreProducto} = productoObjeto;
//const {nombreProducto, precio, disponible} = productoObjeto; // se pueden crear varias variables en una sola línea

console.log(precio);
console.log(nombreProducto);