// "use strict" // ejecuta el código de forma "estricta", se deben seguir las buenas prácticas

// Object methods

const productoObjeto = {
    nombreProducto: "Monitor 30\"",
    precio: 600,
    disponible: true
}

Object.freeze(productoObjeto); // evita que se pueda agregar, eliminar ni modificar las propiedades del objeto
Object.seal(productoObjeto); // evita que se pueda agregar o eliminar las propiedades, pero sí permite modificarlas

productoObjeto.imagen = "imagen"; // un objeto SÍ es modificable a pezar de haberse declarado como const

console.log(Object.isFrozen(productoObjeto)); // Object.isFrozen para saber si un objeto está "bloqueado"
console.log(Object.isSealed(productoObjeto)); // Object.isSealed para saber si un objeto está "sellado"

console.log(productoObjeto);