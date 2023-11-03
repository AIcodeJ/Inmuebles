# Proyecto de Remates Inmobiliarios 👨🏻‍🏫

Este proyecto utiliza Laravel y XAMPP para crear una aplicación web dedicada a remates inmobiliarios. La aplicación permite a los usuarios buscar propiedades en remate, gestionar expedientes y conectar compradores potenciales con propiedades disponibles.

## Requisitos Previos

- Asegúrate de tener [XAMPP](https://www.apachefriends.org/index.html) instalado en tu sistema.
- Se recomienda tener [Composer](https://getcomposer.org/) instalado para gestionar las dependencias de Laravel.

## Configuración

1. Clona el repositorio en tu directorio de proyectos local:

   ```bash```
   git clone https://github.com/tuusuario/remates-inmobiliarios.git

2. Inicia tu servidor XAMPP y asegúrate de que Apache y MySQL estén en funcionamiento.:
3. Configura la base de datos en el archivo .env ubicado en la raíz del proyecto. Debes configurar los siguientes valores:

   ```sql```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tubasededatos
   DB_USERNAME=tuusuario
   DB_PASSWORD=tucontraseña

4. Ejecuta las siguientes comandos en la terminal para preparar la base de datos y las dependencias:

   ```bash```
   composer install
   php artisan key:generate
   php artisan migrate
   php artisan db:seed

5. Inicia el servidor de desarrollo de Laravel:

   ```bash```
   php artisan serve

6. Abre tu navegador y accede a http://localhost:8000 para ver la aplicación.

## Estructura del proyecto

El proyecto sigue la estructura típica de un proyecto Laravel:

app: Contiene los modelos y controladores de la aplicación.
database: Incluye las migraciones y los archivos de semillas para la base de datos.
resources/views: Aquí se encuentran los archivos Blade.php que definen las vistas de la aplicación.

## Archivos Blade.php
Los archivos Blade.php en la carpeta resources/views definen las vistas de la aplicación. Algunas vistas clave incluyen:

* resources/views/propiedades/index.blade.php: La vista para mostrar la lista de propiedades en remate.
* resources/views/expedientes/index.blade.php: La vista para mostrar el historial de expedientes.
* resources/views/compradores/index.blade.php: La vista para mostrar la lista de compradores potenciales.
* resources/views/personal/index.blade.php: La vista para mostrar la lista de personal.
* resources/views/layouts/app.blade.php: La plantilla principal de la aplicación que define la estructura común de las páginas.

## Versionado 📌

Usamos Git para el versionado del proyecto. 

## Autores ✒️

* **Alexis Pérez** - *Creador del Proyecto* - [Alexis](https://github.com/AIcodeJ)

## Licencia 📄

Este proyecto está bajo la Licencia [Alexis](https://github.com/AIcodeJ)
- mira el archivo [LICENSE.md](LICENSE.md) para detalles