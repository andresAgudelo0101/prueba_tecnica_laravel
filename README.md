<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Prueba Técnica  con Laravel

Pasos para la correcta ejecución del proyecto

- [Instalar xampp](https://www.apachefriends.org/download.html).
- [Instalar composer](https://getcomposer.org).
- Ejecutar comando en terminal para usar de forma global: composer global require laravel/installer.
- Descarga el proyecto o en tu terminal has un git clone del repositorio.
- Modifica el nombre el archivo .env.example y elimina el .example para que quede solo .env
- Abre xampp y ejecuta apache y MySQL
- Crea una base de datos de MySQL llamada prueba_tecnica_laravel (si tienes un usuario y contraseña en tu base de datos solo entra al archivo .env y allí modificas estos valores)
- Abre la terminal en la raíz del proyecto y ejecuta: composer install
- En la terminal ejecuta este comando: php artisan migrate 
- Por último, en la terminal ejecuta: php artisan serve (con ctrl más clic izquierdo abres el enlace de ejecución del proyecto)
