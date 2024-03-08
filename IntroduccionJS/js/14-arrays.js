// Arreglos

const numeros = [10,20,30,40,50]; // definir un arreglo

console.log(numeros);
console.table(numeros);

const meses = new Array("Enero","Febrero","Marzo","Abril","Mayo"); // otra forma de definir un arroglo

console.log(meses);
console.table(meses);

const arraglo = ["Hola", 10, true, 'S', null, {nombre: "Manuel", trabajo: "Nini"}, [1,2,3]];
console.log(arraglo);
console.table(arraglo);

// accedera alos valores de un arreglo
console.log(numeros[4]);
console.log(numeros[0]);
console.log(numeros[500]); // undefined

// conocer la extensión de un arreglo
console.log(meses.length);

// Recorrer arreglos
numeros.forEach( function (numero) {
    console.log(numero);
})

// Métodos para los arreglos

numeros[5] = 60; // agregar elementos a un arreglo
numeros[6] = 70;
console.table(numeros);

numeros[2] = 100;
console.table(numeros); // modificar los valoresde un arreglo; no es común hacerlo de esta forma

numeros.push(800);// .push agrega elementos al final del arreglo
numeros.push(900, 1000, 2000);
console.table(numeros);

numeros.unshift(-10,-20,-30); // .unshift agrega elementos al inicio del arreglo
console.table(numeros);

meses.pop(); // elimina el último elemento del arreglo
console.table(meses);

meses.shift(); // elimina el primer elemento del arreglo
console.table(meses);

meses.splice(1, 1); // elimina elementos del arreglo sin inportar su posición; .splice(indice-elemento, cantidad-elementos)
console.table(meses);

// Rest Operator / Spread Operator

const mesesNuevo = new Array("Enero","Febrero","Marzo","Abril","Mayo");
console.table(mesesNuevo);

const nuevoArreglo = [...mesesNuevo, "Junio"]; // crea un nuevo arreglo con los datos del anteriro y le agrega el nuevo dato al final, [...arreglo-a-copiar, elemento-a-agregar]

console.table(nuevoArreglo);

const nuevoArreglo2 = ["Mes Cero", ...mesesNuevo]; // crea un nuevo arreglo con los datos del anteriro y le agrega el nuevo dato al inicio, [elemento-a-agregar, ...arreglo-a-copiar]
console.table(nuevoArreglo2);