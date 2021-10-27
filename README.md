<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre la Aplicación

La aplicacion fue construida para consumir el API construida en el repositorio extra [ACV API Login](https://github.com/govydev/acv-api-login).
Esta aplicacion incorpora

- Formulario para registrarse.
- Formulario para autenticarse.
- Eliminacion de usuario.
- Vista de datos del usuario
- Vista de datos de libros


**Esta aplicación no contiene ningun sistema de base datos agregado por que lo que no es necesario ejecutar las migraciones.**

## Primeros pasos
Una ves descargado, Ingresar a la carpeta del proyecto y ejecutar el comando.

    $composer install
Para descargar las dependencias necesarias.

Revisar el archivo **.env.example** y generar la base de datos que se indica ademas de generar una copia y renombrarlo como **.env**.

Ejecutar el comando.

    $php artisan serve --port=8001
