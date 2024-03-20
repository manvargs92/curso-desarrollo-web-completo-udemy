const { src, dest, watch } = require("gulp"); // extrae las funcionalidades previamente indicadas del archivo gulp de la carpeta node_modules
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

function css(done) {
    src("src/scss/**/*.scss") // Identificar el archivo SASS
        .pipe(plumber())
        .pipe(sass()) // Compilar el archivo; pipe - una acción que se realiza después de otra
        .pipe(dest("build/css")); // Almacenar el archivo compilado en el disco duro

    done(); //callback que avisa a Gulp cuando llegamos al final de la función
}

function devcss(done) {
    watch("src/scss/**/*.scss", css);
    done();
}

exports.css = css;
exports.devcss = devcss;