const carrito = [
    {nombre: "Monitor 20 pulgadas", precio: 500},
    {nombre: "Televisión 50 pulgadas", precio: 700},
    {nombre: "Tablet", precio: 300},
    {nombre: "Audífonos", precio: 200},
    {nombre: "Teclado", precio: 50},
    {nombre: "Celular", precio: 500},
    {nombre: "Bocinas", precio: 300},
    {nombre: "Laptop", precio: 800},
];

// FOREACH
// es mejor para mostrar los elementos en pantalla o ne la consola
carrito.forEach(function (producto) {
    console.log(producto.precio);
});

carrito.forEach(producto => console.log(producto.precio)); // con arrow fucntion

// MAP
// es mejor cuando se quiere crear un nuevo arreglo
carrito.map(function (producto) {
    console.log(producto.nombre);
});

carrito.map(producto => console.log(producto.nombre));

let nuevoArreglo = carrito.map(producto => producto.nombre);
console.table(nuevoArreglo);