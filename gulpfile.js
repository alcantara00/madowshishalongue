const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const imagemin = require('gulp-imagemin'); // Minificar imagenes 
const notify = require('gulp-notify');
const cache = require('gulp-cache');
const clean = require('gulp-clean');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

function css() {
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/css'));
}

function javascript() {
    return src(paths.js)
      .pipe(sourcemaps.init())
      .pipe(concat('bundle.js'))
      .pipe(terser())
      .pipe(sourcemaps.write('.'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('./build/js'))
}

function imagenes() {
    return src(paths.imagenes)
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest('build/img'))
        .pipe(notify({ message: 'Imagen Completada Renderizado' }));
}

function versionWebp() {
    return src(paths.imagenes)
        .pipe(webp())
        .pipe(dest('build/img'))
        .pipe(notify({ message: 'Imagen Completada Webp' }));
}


async function versionAvif(done) {
 
    const avif = await import("gulp-avif"); // Manda a traer la dependencia instalada con "npm install --save-dev gulp-webp" desde la terminal"
 
 
    const opciones = {
        quality: 50 // Esto define que tanta calidad se le bajarán a las imágenes
    }

    src('src/img/**/*.{png,PNG,jpg,JPG}') // Busca recursivamente en todos los archivos y carpetas de la carpeta img con los formatos especificados
        .pipe(avif.default(opciones)) // Los convierte en formato WEBP y les baja la calidad especificada
        .pipe(dest('build/img')) // Los guarda en una nueva carpeta
        .pipe(notify({ message: 'Imagen Completada Avif' }));
    
    done(); // Callback que avisa a gulp cuando llegamos al final de la ejecución del script
}

function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
    watch(paths.imagenes, imagenes);
    watch(paths.imagenes, versionAvif);
    watch(paths.imagenes, versionWebp);

    
}

exports.css = css;
exports.watchArchivos = watchArchivos;
exports.versionAvif = versionAvif;
exports.default = parallel(css, javascript, imagenes, versionWebp, versionAvif, watchArchivos); 