// Métodos de propiedad

const reproductor = {
    reproducir: function (id) {
        console.log(`Reproduciendo la canción con el ID: ${id}`);
    },
    pusar: function () {
        console.log("Pausando canción...");
    },
    crearPlaylist: function (nombre) {
        console.log(`Creando la playlist "${nombre}"`);
    },
    reproducirPlaylist: function (nombre) {
        console.log(`Reproduciendo la playlist: ${nombre}`);
    }
}

console.log(reproductor);

reproductor.reproducir(3840);
reproductor.pusar();

reproductor.borrarCancion = function (id) {
    console.log(`Eliminando la canción con el ID: ${id}`);
}

reproductor.borrarCancion(20);

reproductor.crearPlaylist("Heavy Metal");
reproductor.reproducirPlaylist("Heavy Metal");