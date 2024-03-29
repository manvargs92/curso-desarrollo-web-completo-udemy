// FOR LOOP

for (let indice = 0; indice < 10; indice++) {
    console.log(indice);
}

for (let i = 1; i <= 100; i++) {
    if (i % 2 == 0) {
        console.log(`El número ${i} es par.`);
    }
}

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

for (let i = 0; i < carrito.length; i++) {
    console.log(carrito[i].nombre);
}

// WHILE LOOP

let indice = 0;

while (indice < 10) {
    console.log(indice);

    indice++;
}

indice = 1;

while (indice <= 100) {
    if (indice % 2 == 0) {
        console.log(`El número ${indice} es par.`);
    }

    indice++;
}

indice = 0;

while (indice < carrito.length) {
    console.log(carrito[indice].nombre);

    indice++;
}

// DO WHILE LOOP

let i = 100;

do {
    console.log(i);

    i++;
} while (i < 10);