// POO

// Clases

class Producto {
    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }
    
    formatearProducto() {
        return `El producto ${this.nombre} tiene un precio de $${this.precio}`;
    }

    retornarPrecio() {
        return this.precio;
    }
}

const producto = new Producto(); // instanciamos la clase
const producto2 = new Producto("Monitor curvo de 49\"", 800);
const producto3 = new Producto("Laptop", 800);

console.log(producto2);
console.log(producto3);

console.log(producto2.formatearProducto());
console.log(producto2.retornarPrecio());