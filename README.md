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

## Precaución

Si el proyecto [ACV API Login](https://github.com/govydev/acv-api-login) se ejecuto en el puerto **(8000)** puede hacer las pruebas sin ningun inconveniente, pero si se ejecuto en otro puerto es necesario hacer modificaciones a los archivos ubicados en de la carpeta [Controllers](https://github.com/govydev/acv-crud-simple/tree/main/app/Http/Controllers), especificamente a los archivos.

- [AuthController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/AuthController.php).
- [LibroController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/LibroController.php).
- [UserController.php](https://github.com/govydev/acv-crud-simple/blob/main/app/Http/Controllers/UserController.php).

se debe modificar el contenido de la variable **uri** y cambiar a el puerto en el que se ejecuto la API.

    $uri = 'http://localhost:8000/api/';
