// Async / Await

function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log("Descargando clientes... espere...");
        setTimeout(() => {
            resolve("Los clientes fueron descargados.")
        }, 5000);
    });
}

function descargarUltimosPedidos() {
    return new Promise(resolve => {
        console.log("Descargando pedidos... espere...");
        setTimeout(() => {
            resolve("Los pedidos fueron descargados.")
        }, 3000);
    });
}


async function app() {
    try {
        // const clientes = await descargarNuevosClientes();
        // const pedidos = await descargarUltimosPedidos();
        // console.log(clientes);
        // console.log(pedidos);

        const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimosPedidos()]);
        console.log(resultado);
        console.log(resultado[0]);
        console.log(resultado[1]);
    } catch (error) {
        console.log(error);
    }
}

app();

console.log("Éste código no se bloquea");

// setTimeout(function () {
//     console.log("Set Timeout...");   
// }, 5000);

// setInterval(function () {
//     console.log("Set Interval...");   
// }, 3000);