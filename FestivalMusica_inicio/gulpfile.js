const { src, dest, watch, parallel } = require("gulp"); // extrae las funcionalidades previamente indicadas del archivo gulp de la carpeta node_modules
// CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const autoprefixer = require("autoprefixer"); // se asegura de que el CSS funcione en el navegador que se le indique
const cssnano = require("cssnano"); // comprimir el código de CSS
const postcss = require("gulp-postcss"); // trabaja con autoprefixer y cssnano
const sourcemaps = require("gulp-sourcemaps");

// Imágenes
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const avif = require("gulp-avif");

// JavaScript
const terser = require("gulp-terser-js"); // minificar JS

function css(done) {
    src("src/scss/**/*.scss") // Identificar el archivo SASS
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass()) // Compilar el archivo; pipe - una acción que se realiza después de otra
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write("."))
        .pipe(dest("build/css")); // Almacenar el archivo compilado en el disco duro

    done(); //callback que avisa a Gulp cuando llegamos al final de la función
}

function imagenes(done) {
    const opciones = {
        optimizationLevel: 3
    }

    src("src/img/**/*.{png,jpg}")
        .pipe(cache(imagemin(opciones)))
        .pipe(dest("build/img"))
    
    done();
}

function versionWebp(done) {
    const opciones = {
        quality: 50
    }

    src("src/img/**/*.{png,jpg}")
        .pipe(webp(opciones))
        .pipe(dest("build/img"));

    done();
}

function versionAvif(done) {
    const opciones = {
        quality: 50
    }

    src("src/img/**/*.{png,jpg}")
        .pipe(avif(opciones))
        .pipe(dest("build/img"));

    done();
}

function javascript(done) {
    src("src/js/**/*.js")
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write("."))
        .pipe(dest("build/js"));

    done();
}

function dev(done) {
    watch("src/scss/**/*.scss", css);
    watch("src/js/**/*.js", javascript);
    done();
}

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
// exports.devcss = devcss;
exports.dev = parallel(imagenes, versionWebp, versionAvif, javascript, dev); //series - las funciones se ejecutan una detrás de otra; parallel- las funciones se ejecutan en paralelo