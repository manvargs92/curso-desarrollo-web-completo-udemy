// Strings o cadenas de texto

const PRODUCTO = "Monitor de 20 pulgadas";
const PRODUCTO2 = String("Monitor de 30 pulgadas");
const PRODUCTO3 = new String("Monitor de 50 pulgadas");

console.log(PRODUCTO);
console.log(PRODUCTO2);
console.log(PRODUCTO3);

console.log(typeof(PRODUCTO));
console.log(typeof(PRODUCTO2));
console.log(typeof(PRODUCTO3));


const PRODUCTO4 = "Pantalla de 20\""; // escapar caracteres
console.log(PRODUCTO4);