# Proyecto de Remates Inmobiliarios 👨🏻‍🏫

Este proyecto se centra en desarrollar una plataforma para la gestión eficiente de propiedades inmobiliarias y compradores potenciales, abordando la problemática de dispersión de información y falta de centralización en el mercado de remates bancarios. La solución propuesta comprende un sistema que facilita la interacción entre propiedades, compradores y personal involucrado, mejorando la experiencia general en este nicho. Se utiliza Laravel y XAMPP para crear una aplicación web dedicada a remates inmobiliarios. La aplicación permite a los usuarios buscar propiedades en remate, gestionar expedientes y conectar compradores potenciales con propiedades disponibles.

## Problema Identificado
El mercado de remates bancarios carece de una plataforma centralizada que simplifique el proceso de búsqueda y adquisición de propiedades. La información dispersa dificulta la toma de decisiones informadas tanto para compradores potenciales como para el personal encargado.

## Propuesta - Solución
Desarrollamos un sistema basado en Laravel, XAMPP y el patrón de diseño MVC para proporcionar una interfaz intuitiva y eficaz. La aplicación centraliza la información de propiedades, compradores y expedientes, facilitando la toma de decisiones y mejorando la comunicación entre todas las partes involucradas.

## Arquitectura
Se puede encontrar una descripción detallada de la arquitectura en la carpeta Diagramas y Cronograma de este repositorio.

## Requerimientos
- Servidores: XAMPP (Apache, MySQL).
- Versión de Composer:[latest v2.6.5]
- Paquetes Adicionales: Laravel Framework.
- Versión de PHP: [latest 8.3.0].
- Versión de MySQL: [latest 8.0.34].
- Versión de Laravel: [latest 10.x].

## Requisitos Previos

- Asegúrate de tener [XAMPP](https://www.apachefriends.org/index.html) instalado en tu sistema.
- Se recomienda tener [Composer](https://getcomposer.org/) instalado para gestionar las dependencias de Laravel.

## Configuración

1. Clona el repositorio en tu directorio de proyectos local:

   ```git clone https://github.com/tuusuario/remates-inmobiliarios.git```

2. Inicia tu servidor XAMPP y asegúrate de que Apache y MySQL estén en funcionamiento:
3. Configura la base de datos en el archivo .env ubicado en la raíz del proyecto. Debes configurar los siguientes valores:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tubasededatos
   DB_USERNAME=tuusuario
   DB_PASSWORD=tucontraseña
   ```

4. Ejecuta las siguientes comandos en la terminal para preparar la base de datos y las dependencias:

   ```   
   composer install
   php artisan key:generate
   php artisan migrate
   php artisan db:seed
   ```

5. Inicia el servidor de desarrollo de Laravel:

   ```
   php artisan serve
   ```

6. Abre tu navegador y accede a http://localhost:8000 para ver la aplicación.


## Configuración
_Configuración del Producto:_

 * Ajusta las configuraciones en el archivo .env.
 * Configura las opciones específicas de la base de datos y otras configuraciones en los archivos correspondientes.

_Configuración de Requerimientos:_

 * Asegúrate de tener XAMPP configurado correctamente.
 * Verifica que la versión de PHP sea compatible con Laravel.

## Estructura del proyecto

_El proyecto sigue la estructura típica de un proyecto Laravel:_

```
app: Contiene los modelos y controladores de la aplicación.
database: Incluye las migraciones y los archivos de semillas para la base de datos.
resources/views: Aquí se encuentran los archivos Blade.php que definen las vistas de la aplicación.
```

## Archivos Blade.php
_Los archivos Blade.php en la carpeta resources/views definen las vistas de la aplicación. Algunas vistas clave incluyen:_

```
resources/views/properties/index.blade.php: La vista para mostrar la lista de propiedades en remate. 
resources/views/expedients/index.blade.php: La vista para mostrar el historial de expedientes.
resources/views/buyers/index.blade.php: La vista para mostrar la lista de compradores potenciales.
resources/views/personals/index.blade.php: La vista para mostrar la lista de personal.
resources/views/layouts/app.blade.php: La plantilla principal de la aplicación que define la estructura común de las páginas.
```

## Versionado 📌

Usamos Git para el versionado del proyecto. 

## Autores ✒️

* **Alexis Pérez** - *Creador del Proyecto* - [Alexis](https://github.com/AIcodeJ)

## Licencia 📄

Este proyecto está bajo la Licencia [Alexis](https://github.com/AIcodeJ)
- mira el archivo [LICENSE.md](LICENSE.md) para detalles