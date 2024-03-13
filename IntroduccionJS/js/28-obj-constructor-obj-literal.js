// POO - object constructor y object literal

// Object literal

const producto = {
    nombre: "Tablet",
    precio: 500
}

// Object constructor

function Producto(nombre, precio) { // clase Producto
    this.nombre = nombre;
    this.precio = precio;
}

// prototype - crear funciones que solo se utilizan en un objeto en específico

Producto.prototype.formatearProducto = function() { // no se requiere que tome ningún parámetro porque ya está atado a Producto
    return `El producto ${this.nombre} tiene un precio de $${this.precio}`
}

// function formatearProducto(producto) {
//     return `El producto ${producto.nombre} tiene un precio de $${producto.precio}`
// }


const producto2 = new Producto("Monitor curvo de 49\"", 800); // instanciación de la clase Producto
const producto3 = new Producto("Laptop", 800);

console.log(producto2);
console.log(producto3);

// console.log(formatearProducto(producto2));
console.log(producto2.formatearProducto());






function Alumno(nombre, edad, promedio, graduado) {
    this.nombre = nombre;
    this.edad = edad;
    this.promedio = promedio;
    this.graduado = graduado;
}

Alumno.prototype.imprimir = function () {
    return "Hola!!";
}

const alumno1 = new Alumno("Paquito", "10", 8.3, false);
const alumno2 = new Alumno("Juanita", "13", 7.8, true);

console.log(alumno1);
console.log(alumno2);

console.log(alumno1.imprimir());