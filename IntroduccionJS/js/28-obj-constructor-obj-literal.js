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

const producto2 = new Producto("Monitor curvo de 49\"", 800); // instanciación de la clase Producto
const producto3 = new Producto("Laptop", 800);

console.log(producto2);
console.log(producto3);



function Alumno(nombre, edad, promedio, graduado) {
    this.nombre = nombre;
    this.edad = edad;
    this.promedio = promedio;
    this.graduado = graduado;
}

const alumno1 = new Alumno("Paquito", "10", 8.3, false);
const alumno2 = new Alumno("Juanita", "13", 7.8, true);

console.log(alumno1);
console.log(alumno2);