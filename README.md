# P2P_Goal

**Autor:** Jesús Domingo Mestra Vega
**fecha:** 13.03.2019

## Requerimientos

Este es el código fuente desarrollado para realizar una conexión a la Api de redirección de PlaceToPay y realizar la función de pago básico que incluye. para la realización de esta prueba fue necesario tener un ambiente de desarrollo con las siguientes carácteristicas:

- **php 7.2.4**
- **laravel 5.8**
- **Mysql 5.7.21**

## Ejecución del proyecto

Realice los siguientes pasos:

- Clone el proyecto desde Github:
`git clone https://github.com/jedomeve/P2P_Goal.git`

- ubicarse en la carpeta generada del proyecto e instalar las dependencias **composer.json**
`composer install`

- Renombrar el archivo **.env.example** a **.env** para incluir todas las variables de entorno necesarias para consumir la api, datos de timezone y demas datos de la aplicación.

- Crear una base de datos en MySql llamada **P2P_Goal** y modiicar en el archivo **.env** el usuario y contraseña de conexión en caso de que por defecto no se conecte con el usuario **root**

- ejecutar `php artisan serve` para iniciar el proyecto en el ambiente local en el puerto 8000
- ingresar al navegador con la ruta: `http://127.0.0.1:8000`
