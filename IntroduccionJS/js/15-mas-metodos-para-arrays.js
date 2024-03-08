// Más métodos para los arrays

const meses = ["Enero","Febrero","Marzo","Abril","Mayo"]; // arreglo unidimensional

const carrito = [ // areglo de objetos
    {nombre: "Monitor 20 pulgadas", precio: 500},
    {nombre: "Televisión 50 pulgadas", precio: 700},
    {nombre: "Tablet", precio: 300},
    {nombre: "Audífonos", precio: 200},
    {nombre: "Teclado", precio: 50},
    {nombre: "Celular", precio: 500},
    {nombre: "Bocinas", precio: 300},
    {nombre: "Laptop", precio: 800},
];

// forEach
meses.forEach(function (mes) {
    if (mes == "Marzo") {
        console.log("Marzo sí existe.");
    }
});

// includes
let resultado = meses.includes("Marzo"); // para arreglos planos
console.log(resultado);

// some
resultado = carrito.some(function (producto) { // para arreglos de objetos
    return producto.nombre == "Celular";
});
console.log(resultado);

// reduce
resultado = carrito.reduce(function (total, producto) {
    return total + producto.precio;
}, 0);
console.log(resultado);

// filter
resultado = carrito.filter(function (producto) { // filtra los valores
    return producto.precio > 400;
});
console.log(resultado);

resultado = carrito.filter(function (producto) {
    return producto.nombre === "Celular";
});
console.log(resultado);