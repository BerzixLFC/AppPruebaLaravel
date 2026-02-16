# 👤 Mi Perfil - Proyecto Laravel UNAB

## Descripción

Este proyecto es una aplicación web desarrollada con **Laravel** para la asignatura de **Desarrollo Backend**.  
La aplicación presenta un perfil profesional estructurado mediante rutas dinámicas y vistas Blade, donde se muestra información personal, intereses, habilidades y metas académicas y profesionales.

---

## Características

El sistema cuenta con una navegación estructurada mediante rutas de Laravel definidas en el archivo `routes/web.php`, permitiendo el acceso organizado a cada sección del perfil.

A nivel de diseño, se implementó una interfaz personalizada utilizando CSS propio ubicado en `public/css/estilos.css`, evitando el uso de frameworks externos como Bootstrap con el fin de trabajar estilos desde cero.

Además, el proyecto cuenta con control de versiones mediante Git, manteniendo un historial de 10 commits descriptivos alineados con la línea de tiempo oficial de desarrollo.

---

## Requisitos del Sistema

Para la correcta ejecución del proyecto se requiere:

- PHP versión 8.1 o superior  
- Composer instalado en el sistema  
- Un servidor local como XAMPP o similar  

---

## Instalación y Configuración

Para utilizar el proyecto, primero se debe clonar el repositorio oficial desde GitHub mediante el comando:

`git clone https://github.com/BerzixLFC/AppPruebaLaravel.git`

Posteriormente, es necesario instalar las dependencias de Laravel utilizando Composer con el comando:

`composer install`

Una vez instaladas las dependencias, se debe configurar el entorno creando el archivo `.env` a partir del archivo de ejemplo `.env.example`, y luego generar la clave de seguridad de la aplicación usando:

`php artisan key:generate`

---

## Ejecución del Proyecto

Para iniciar el servidor de desarrollo local de Laravel, se utiliza el comando:

`php artisan serve`

Después de ejecutar el comando, la aplicación estará disponible en la dirección:

**http://localhost:8000**

---

## Autor

**Nombre:** Camilo Rojas  
**Docente:** Fabian Enrique Suárez Carvajal  
**Institución:** Universidad Autónoma de Bucaramanga  
**Fecha:** Febrero 2026  