// Spread Operator

const productoObjeto = {
    nombreProducto: "Monitor 30\"",
    precio: 600,
    disponible: true
}

const medidas = {
    peso: "1kg",
    longitud: "1m"
}

// unir ambos objetos

const nuevoProducto = {...productoObjeto, ...medidas}

console.log(productoObjeto);
console.log(medidas);
console.log(nuevoProducto);