// Arrow functions

const sumar = function(n1, n2) { // comparativa, fución normal
    console.log(n1 + n2);
}

const sumar2 = (n1, n2) => console.log(n1 + n2); // arrow fucntion
sumar2(5, 10);

const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`); // arrow fucntion


const meses = ["Enero","Febrero","Marzo","Abril","Mayo"];

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

meses.forEach(mes => { // arrow fucntion
    if (mes == "Marzo") {
        console.log("Marzo sí existe.");
    }
});

resultado = carrito.some(producto => producto.nombre == "Celular"); // arrow fucntion
console.log(resultado);

resultado = carrito.reduce((total, producto) => total + producto.precio, 0); // arrow fucntion
console.log(resultado);

resultado = carrito.filter(producto => producto.precio > 400); // arrow fucntion
console.log(resultado);

resultado = carrito.filter(producto => producto.nombre === "Celular"); // arrow fucntion
console.log(resultado);