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

const PRODUCTO5 = "Monitor HD";
console.log(PRODUCTO5);

// Length
console.log(PRODUCTO5.length); // .length propiedad para saber la longitud del string

const TWEET = "Aprendiendo JavaScript con el curso de Desarrollo Web Completo.";
console.log(TWEET.length);

// IndexOf
console.log(TWEET.indexOf("JavaScript")); // .indexOf método para saber la posición de una palabra en un string, retorna un valor >= 0, o -1 en caso de que no la encuentre
console.log(PRODUCTO5.indexOf("Tablet"));

// Include
console.log(TWEET.includes("JavaScript")); // .includes método para saber si hay una palabra en un string, retorna true o false
console.log(PRODUCTO5.includes("Tablet"));