// this en JavaScript

const reservacion = {
    nombre: "Juan",
    apellido: "De la Torre",
    total: 5000,
    pagado: false,
    informacion: function () {
        console.log(`El cliente ${this.nombre} reservó, y su cantidad a pagar es de ${this.total}`); // this hace referencia al objeto sobre el cual se mandana a llamar esta función
    }
}

console.log(reservacion.nombre);

reservacion.informacion();