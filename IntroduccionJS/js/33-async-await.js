// Async / Await

function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log("Descargando clientes... espere...");
        setTimeout(() => {
            resolve("Los clientes fueron descargados.")
        }, 10000);
    });
}


async function app() {
    try {
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
    } catch (error) {
        console.log(error);
    }
}

app();

console.log("Éste código no se bloquea");

// setTimeout(function () {
//     console.log("Set Timeout...");   
// }, 5000);

setInterval(function () {
    console.log("Set Interval...");   
}, 3000);