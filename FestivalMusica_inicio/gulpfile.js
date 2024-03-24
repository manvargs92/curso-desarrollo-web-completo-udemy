const { src, dest, watch, parallel } = require("gulp"); // extrae las funcionalidades previamente indicadas del archivo gulp de la carpeta node_modules
// CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

// Imágenes
const webp = require("gulp-webp");

function css(done) {
    src("src/scss/**/*.scss") // Identificar el archivo SASS
        .pipe(plumber())
        .pipe(sass()) // Compilar el archivo; pipe - una acción que se realiza después de otra
        .pipe(dest("build/css")); // Almacenar el archivo compilado en el disco duro

    done(); //callback que avisa a Gulp cuando llegamos al final de la función
}

function versionWebp(done) {
    const opciones = {
        quality: 50
    }

    src("src/img/**/*.{png, jpg}")
        .pipe(webp(opciones))
        .pipe(dest("build/img"));

    done();
}

function devcss(done) {
    watch("src/scss/**/*.scss", css);
    done();
}

exports.css = css;
exports.versionWebp = versionWebp;
// exports.devcss = devcss;
exports.devcss = parallel(versionWebp, devcss); //series - las funciones se ejecutan una detrás de otra; parallel- las funciones se ejecutan en paralelo