// Notification API

const boton = document.querySelector("#boton");

boton.addEventListener("click", function () {
    console.log("Diste click");

    Notification.requestPermission()
        .then(resultado => console.log(`El resultado es ${resultado}`))
});

if (Notification.permission == "granted") {
    new Notification("Esta es una notificación", {
        icon: "img/icono.png",
        body: "Codigo con Juan, los mejores tutoriales"
    });
}