// Switch

const metodoPago ="Efectivo";

switch (metodoPago) {
    case "Tarjeta":
        console.log("Pagaste con tarjeta.");
        break;
    case "Cheque":
        console.log("El usuario va a pqgar con cheque, revisaremos los fondos primero.");
        break;
    case "Efectivo":
        console.log("Pagaste con efectivo.");
        break;
    default:
        console.log("Aún no has pagado.");
        break;
}