# curso-desarrollo-web-completo-udemy
Curso: Desarrollo Web Completo visto en Udemy


**Para que se edite la etiqueta de cierre al mismo tiempo que la de apertura**: En **Visual Estudio**: File -> Preferences -> Linked Editing

**Webs y herramientas usadas:**
Reacomodar párrafos: shit + alt + F
https://www.lipsum.com/
https://tablericons.com/
https://heroicons.com/
https://fontawesome.com/
https://fonts.google.com/
https://necolas.github.io/normalize.css/
https://www.paulirish.com/2012/box-sizing-border-box-ftw/
https://www.cssmatic.com/
https://caniuse.com/
https://modernizr.com/download?setclasses&q=webp
https://www.netlify.com/
Lighthouse - extensión para Chrome; sirve para auditar sitios web.
https://nodejs.org/
NPM
SASS
Gulp
https://gulpjs.com/
gulp-sass plugin
gulp-plumber
gulp-webp v4
gulp-imagemin v7.1.0
gulp-cache
https://cssgradient.io/
cssnano
autoprefixer
postcss
gulp-postcss
gulp-sourcemaps
gulp-terser-js

**Comandos NPM usados**
npm init - inicia un proyecto de node creando el package.json
npm install - instala dependencias del package.json
npm install (dependecia) --save-dev - instala una dependencia de ambienre de desarrollo
npm run nombre-script - corre un escript listado en package.json
npx - ejecutar paquetes sin necesidad de isntalarlos globalmente
npx gulp nombre-tarea - ejacuta una tarea de Gulp

<!-- ejecutar gulp con un watch para compilar el css en tiempo real -->
npm run dev
npx gulp dev
<!-- ---------------------------------------------------------------- -->

**Otras herremientas usadas**
Apache
https://www.apachelounge.com/download/
Microsoft Visual C++ Redistributable
https://learn.microsoft.com/es-es/cpp/windows/latest-supported-vc-redist?view=msvc-170

descomprimir carpeta apache en disco C:
modificar archivo C:\apache\conf\httpd.conf:
Define SRVROOT "c:/apache"
ServerName localhost

lanzar servidor desde PowerShell:
cd C:\apache\bin
.\httpd.exe

registrar apache como servicio, desde PowerShell ejecutado como Administrador:
cd C:\apache\bin
.\httpd.exe -k install

eliminar servicio de apache - .\httpd.exe -k uinstall


PHP
https://www.php.net/downloads

descomprimir en carpeta php en disco C:
modificar archivo C:\apache\conf\httpd.conf:
	LoadModule php_module "C:/php/php8apache2_4.dll"
	AddHandler application/x-httpd-php .php
	PHPIniDir "c:/php"
hacer copia de archivo C:\php\php.ini-production, renombrar a php.ini, y modificar:
	post_max_size = 20M
	upload_max_filesize = 20M
	extension=fileinfo
	extension=gd
	extension=mysqli
agregar PHP a las variables de entorno del sistema

PHP Intelephense - extensión para VSCode

MySQL
https://dev.mysql.com/downloads/mysql/
MySQL Workbench
https://www.mysql.com/products/workbench/
Composer
https://getcomposer.org/

**Otros comandos usados**
php -S localhost:3000 - iniciar el servidor de PHP, en el puerto 3000, desde la terminal (previamente instalado PHP y agregado a las variables de entorno)