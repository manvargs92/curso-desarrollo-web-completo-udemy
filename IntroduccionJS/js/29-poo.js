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

    obtenerPrecio() {
        console.log(this.precio);
    }
}

const producto = new Producto(); // instanciamos la clase
const producto2 = new Producto("Monitor curvo de 49\"", 800);
const producto3 = new Producto("Laptop", 800);

console.log(producto2);
console.log(producto3);

console.log(producto2.formatearProducto());
console.log(producto2.obtenerPrecio());

// Herencia
// la herencia evita duplicar código

class Libro extends Producto{ // hereda de la clase Producto el constructor y la fucnión formatearProducto
    constructor(nombre, precio, isbn) {
    //     this.nombre = nombre;
    //     this.precio = precio;
        super(nombre, precio);
        this.isbn = isbn;
    }

    formatearProducto() {
        return `${super.formatearProducto()} y su ISBN es ${this.isbn}`;
    }

    obtenerPrecio() {
        super.obtenerPrecio();
        console.log("Y sí hay en existencia.");
    }
}

const libro = new Libro("JavaScript, la revolución", 120, "65465064043135103");

console.log(libro);
console.log(libro.formatearProducto());
console.log(libro.obtenerPrecio());