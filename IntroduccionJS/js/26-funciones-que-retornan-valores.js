// Funciones que retornan valores

function sumar(n1, n2) {
    return n1 + n2; // en vez de mostrar el resultado, lo va a "retornar"
}

const resultado = sumar(2, 3);

console.log(resultado);


let total = 0;
 function agregarCarrito(precio) {
    return total += precio;
}

function calcularImpuesto(total) {
    return 1.15 * total;
}

total = agregarCarrito(200);
console.log(`Total: ${total}`);

total = agregarCarrito(400);
console.log(`Total: ${total}`);

total = agregarCarrito(600);
console.log(`Total: ${total}`);


const totalAPagar = calcularImpuesto(total);
console.log(`Total a pagar: ${totalAPagar}`);