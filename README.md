# NETFLIX-Content-Manager
Este proyecto es una plataforma desarrollada en PHP que permite gestionar contenidos (como películas, series, etc.) almacenados en una base de datos MySQL. El sistema permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) sobre los contenidos, brindando una interfaz sencilla para manejar los datos de la base de datos.

## Características principales

- *Agregar contenido*: Permite agregar nuevos registros a la base de datos, como título, género, año de estreno, clasificación, duración y país de producción.
- *Visualizar contenido*: Muestra los registros existentes en la base de datos de manera ordenada.
- *Actualizar contenido*: Permite modificar los detalles de un contenido (por ejemplo, cambiar el título, género o duración).
- *Eliminar contenido*: Permite eliminar un contenido de la base de datos de manera definitiva.

## Tecnologías utilizadas

- *PHP*: Lenguaje de programación utilizado para gestionar la lógica del backend y las interacciones con la base de datos.
- *MySQL*: Sistema de gestión de bases de datos relacional que almacena la información de los contenidos.
- *HTML/CSS*: Se utiliza para estructurar y diseñar la interfaz de usuario del proyecto.
- *XAMP*: Servidor web local utilizado para realizar las conexiones con SQL y PHP.
- 
## Estructura del Proyecto

El proyecto está compuesto por varios archivos PHP que realizan funciones específicas para interactuar con la base de datos *MySQL*. Los archivos principales son:

- *connection.php: Establece la conexión entre el proyecto y la base de datos **MySQL*.
- *index.php*: Muestra los contenidos almacenados en la base de datos.
- *add_content.php*: Permite agregar nuevos contenidos a la base de datos.
- *edit_content.php*: Permite editar los detalles de un contenido existente.
- *delete_content.php*: Elimina un contenido de la base de datos.

## Conexión con la Base de Datos
El archivo connection.php es el encargado de establecer la conexión entre el proyecto PHP NET y la base de datos MySQL.

## Estructura de la Base de Datos
La base de datos netflix_db contiene una tabla llamada contenido con la siguiente estructura:

| Columna          | Tipo de Dato      | Descripción                             |
|------------------|-------------------|-----------------------------------------|
| id             | INT AUTO_INCREMENT| Identificador único de cada contenido   |
| titulo         | VARCHAR(255)       | Título de la película o serie           |
| genero         | VARCHAR(100)       | Género de la película o serie           |
| anio           | INT               | Año de estreno                          |
| clasificacion  | VARCHAR(50)        | Clasificación por edad                  |
| duracion       | VARCHAR(50)        | Duración de la película o serie         |
| pais           | VARCHAR(100)       | País de producción                      |


# Operaciones CRUD
Crear: Los usuarios pueden agregar nuevos contenidos a través de un formulario en add_content.php. Este formulario envía los datos al archivo add_content.php, que los inserta en la base de datos utilizando una consulta SQL INSERT.

Leer: Los contenidos se visualizan en index.php. Los registros de la tabla contenido son obtenidos con una consulta SQL SELECT y luego se muestran en una tabla HTML.

Actualizar: Los usuarios pueden editar los detalles de un contenido haciendo clic en un botón de edición en index.php. Esto redirige al usuario a edit_content.php, donde se pueden modificar los campos del contenido seleccionado. Los cambios se actualizan en la base de datos mediante una consulta SQL UPDATE.

Eliminar: Los contenidos pueden ser eliminados desde index.php. Al hacer clic en el botón de eliminar, se envía una solicitud para eliminar el contenido de la base de datos utilizando una consulta SQL DELETE.
