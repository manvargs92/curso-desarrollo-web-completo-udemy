// Fetch API

function obtenerEmpleados() {

    const urlArchivo = "js/empleados.json";

    fetch(urlArchivo)
        .then(resultado => {
            // console.log(resultado);
            return resultado.json();
            // return resultado.text();
        })
        .then(datos => {
            console.log(datos);
            
            const {empleados} = datos;

            empleados.forEach(empleado => {
                console.log(empleado);
                console.log(empleado.id);
                console.log(empleado.nombre);
                console.log(empleado.puesto);

                document.querySelector(".muestra").textContent += empleado.nombre;
            });
        })
}


// froma mas corta con async / await
async function obtenerEmpleados() {

    const urlArchivo = "js/empleados.json";

    const resultado = await fetch(urlArchivo);
    const datos = await resultado.json();
    console.log(datos);

}

obtenerEmpleados();