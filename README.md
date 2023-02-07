<h1>CRUD Reservas de Mascotas en Laravel 9<h1>

<h2>AUTOR: DAVID SARRIA</h2>
<h2>EMAIL: davidjuanmontano7@gmail.com</h2>
<h2>EMAIL WORK: sarrifreelancer@gmail.com</h2>
<h2>Fecha: 06/02/2023 </h2>

<h3>Instalación:</h3>
<ol><li>Crear una base de datos mysql</li>
    <li>Clonar o descargar el proyecto en el directorio de tu servidor web</li>
    <li>Acceder mediante terminal a la carpeta del proyecto</li>
    <li>Ejecutar: Composer install</li>
    <li>Crear el archivo .env con los comandos: cp .env.example .env</li>
    <li>Generar la API key ejecutando: php artisan key:generate</li>
    <li>En el archivo .env colocar el nombre de la base de datos</li>
    <li>Para ejecutar las migraciones: php artisan migrate</li>
</ol>

<p>Extra<p>
<ul>
    <li>install npm</li>
    <li>install build</li>
    <li>Para compilar js/sass/css/bootstrap npm run dev</li>
    <li>php artisan seve</li>
</ul>

#Debes Loguearte al iniciar la aplicacion en tu servidor

<h2>Tabla Clientes</h2>
<ul><li>nombre</li><li>documentoid</li>
<li>telefono</li><li>email</li></ul>

<h2>Tabla Mascotas</h2>
<ul><li>codigo_mascota</li>
<li>nombre_mascota</li>
<li>tipo_mascota</li>
<li>documentoid</li></ul>

<h2>Tabla Citas</h2>
<ul><li>id</li>
<li>fecha</li>
<li>hora</li>
<li>codigo_masccota</li></ul>






