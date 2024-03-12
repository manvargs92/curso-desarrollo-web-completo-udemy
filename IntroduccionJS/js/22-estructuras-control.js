// Estructuras de control

const puntaje = 100;

// IF
if (puntaje == 1000) {
    console.log("1. El puntaje es 1000");   
}

if (puntaje === 1000) { // === comparador estricto
    console.log("2. El puntaje es 1000");   
} else {
    console.log("No es igual.");
}

if (puntaje != 1000) {
    console.log("El puntaje es diferente de 1000");
}

const efectivo = 1000;
const carrito = 800;

if (efectivo > carrito) {
    console.log("El usuario puede pagar.");
} else {
    console.log("Fondos insuficientes.");
}

// ELSE IF
const rol = "Editor";

if (rol === "Administrador") {
    console.log("Tienes acceso a todo el sistrma.");
} else if (rol === "Editor") {
    console.log("Eres editor, puedes entrar pero no puedes hacer mucho.");
} else {
    console.log("No tienes acceso.");
}