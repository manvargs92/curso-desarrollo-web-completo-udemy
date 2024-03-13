// Promises en JS
// refleja un valor que podrá estar disponible ahora, en un futuro, o nunca

const usuarioAutenticado = new Promise((resolve, reject) => {
    const auth = false;

    if (auth) {
        resolve("Usuario Autenticado"); // el promise se resuelve
    } else {
        reject("No se pudo iniciar sesión"); // el promise se rechaza (no se resolvió)
    }
});

usuarioAutenticado
    .then(resultado => console.log(resultado))
    .catch(error => console.log(error))

console.log(usuarioAutenticado);

// En los promises existen 3 valores:
// Pending: No se ha cumplido pero tampoco se ha rechazado
// Fulfilled: Ya se cumplió el promise
// Rejected: Se ha rechazado o no se pudo cumplir