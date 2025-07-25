# SISVENTAS - Sistema de Gestion de Ventas

**SISVENTAS** En un sistema web desarrollado en PHP que permite gestionar categorias, clientes y productos ,integrando controladores y modelos personalizados, vistas intuitivas y una estructura modular tipo MVC. Está pensado para negocios que desean llevar un control organizado de su inventario y operaciones.

---

## 🛠️ Tecnologías Utilizadas

-   **Backend:** PHP
-   **Base de Datos:** MySQL (o MariaDB)
-   **Servidor Web:** Apache (requerido por el archivo `.htaccess` para URLs amigables)
-   **Frontend:** HTML, CSS, JavaScript ()

---

## ⚙️ Instalación

Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

1.  **Requisitos Previos:**
    -   Tener instalado un entorno de desarrollo local como [XAMPP](https://www.apachefriends.org/es/index.html), WAMP o MAMP. Esto te proporcionará Apache, PHP y MySQL.

2.  **Clonar el Repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/tu-repositorio.git](https://github.com/tu-usuario/tu-repositorio.git)
    ```

3.  **Mover el Proyecto:**
    -   Mueve la carpeta del proyecto al directorio `htdocs` (en XAMPP) o `www` (en WAMP/MAMP).

4.  **Configurar la Base de Datos:**
    -   Abre `phpMyAdmin` (generalmente en `http://localhost/phpmyadmin`).
    -   Crea una nueva base de datos. Puedes llamarla `mi_tienda_db` o como prefieras.
    -   Selecciona la base de datos recién creada y ve a la pestaña **Importar**.
    -   Haz clic en "Seleccionar archivo" y elige el archivo `database_schema.sql` que se encuentra en la raíz del proyecto.
    -   Haz clic en "Continuar" para crear las tablas y la estructura de la base de datos.

5.  **Configurar la Conexión:**
    -   Abre el archivo `includes/db.php` en tu editor de código.
    -   Modifica las variables de conexión con los datos de tu base de datos local.
    ```php
    // Ejemplo en includes/db.php
    $host = 'localhost';
    $dbname = 'mi_tienda_db'; // ```

    # Sistema de Gestión de Ventas (PHP-MVC)

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.1-blue?logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Database-MySQL-orange?logo=mysql" alt="MySQL">
  <img src="https://img.shields.io/github/license/tu-usuario/tu-repositorio" alt="Licencia">
</p>

> Un sistema web desarrollado desde cero con PHP y arquitectura MVC para la administración de un negocio. Permite gestionar productos, clientes, proveedores, usuarios y realizar ventas.

---

## 📋 Tabla de Contenidos
- [Descripción del Proyecto](#descripción-del-proyecto)
- [Características](#características)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Instalación](#instalación)
- [Modo de Uso](#-modo-de-uso)
- [Flujo de una Petición (MVC)](#-flujo-de-una-petición-mvc)
- [Estructura de Carpetas](#-estructura-de-carpetas)
- [Cómo Contribuir](#-cómo-contribuir)
- [Tareas Pendientes y Mejoras Futuras](#-tareas-pendientes-y-mejoras-futuras)
- [Licencia](#-licencia)
- [Autor y Agradecimientos](#-autor-y-agradecimientos)

---

## 📝 Descripción del Proyecto

Este proyecto es una aplicación web que sigue el patrón **Modelo-Vista-Controlador**. Su objetivo principal es facilitar la gestión comercial de una pequeña empresa, cubriendo las áreas de inventario, clientes, proveedores y transacciones de venta.

El sistema está construido sin el uso de frameworks (PHP "puro"), lo que lo convierte en un excelente proyecto para entender los fundamentos del desarrollo web backend y la arquitectura MVC.

## ✨ Características

El sistema cuenta con los siguientes módulos (CRUD - Crear, Leer, Actualizar, Borrar):

-   🔐 **Autenticación:** Sistema de Login y Logout para usuarios.
-   👤 **Gestión de Usuarios:** Administración de los usuarios que pueden acceder al sistema.
-   📦 **Gestión de Productos:** Manejo de inventario de productos.
-   📇 **Gestión de Clientes:** Base de datos de clientes.
-   🚚 **Gestión de Proveedores:** Base de datos de proveedores.
-   🛒 **Gestión de Ventas:** Registro de ventas y visualización de detalles de cada transacción.
-   🗂️ **Gestión de Categorías:** Organización de productos por categorías.

---

## 🛠️ Tecnologías Utilizadas

-   **Backend:** PHP
-   **Base de Datos:** MySQL (o MariaDB)
-   **Servidor Web:** Apache (requerido por el archivo `.htaccess` para URLs amigables)
-   **Frontend:** HTML, CSS, JavaScript ()

---

## ⚙️ Instalación

Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

1.  **Requisitos Previos:** Tener instalado un entorno de desarrollo local como [XAMPP](https://www.apachefriends.org/es/index.html), WAMP o MAMP.
2.  **Clonar el Repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/tu-repositorio.git](https://github.com/tu-usuario/tu-repositorio.git)
    ```
3.  **Mover el Proyecto:** Mueve la carpeta del proyecto al directorio `htdocs` (en XAMPP) o `www` (en WAMP/MAMP).
4.  **Configurar la Base de Datos:**
    -   Abre `phpMyAdmin` y crea una nueva base de datos (p. ej., `mi_tienda_db`).
    -   Selecciona la base de datos y en la pestaña **Importar**, sube el archivo `database_schema.sql`.
5.  **Configurar la Conexión:**
    -   Abre `includes/db.php` y modifica las credenciales para que coincidan con tu configuración local.

---

## 🚀 Modo de Uso

Una vez completada la instalación, puedes empezar a utilizar el sistema.

1.  **Acceso al Sistema:**
    -   Abre tu navegador y ve a `http://localhost/nombre-de-la-carpeta-del-proyecto/`.
    -   Serás redirigido a la página de **login**.
    -   -   **Usuario:** `admin`
    -   **Contraseña:** `admin123`

2.  **Primeros Pasos:**
    -   Se recomienda empezar por los módulos de gestión para poblar la base de datos:
        1.  **Añadir Proveedores:** Ve a la sección de `Proveedores` y registra uno o más.
        2.  **Añadir Categorías:** Define las categorías para tus productos.
        3.  **Añadir Productos:** Registra tus productos, asociándolos a un proveedor y una categoría.
    -   Una vez que tengas productos en el inventario, puedes ir al módulo de **Ventas** para crear una nueva transacción.

---

## 🔄 Flujo de una Petición (MVC)

Para entender cómo funciona el código, aquí se describe el flujo típico de una solicitud:

1.  El usuario accede a una URL como `http://localhost/proyecto/producto/editar/5`.
2.  El servidor **Apache**, a través del archivo **`.htaccess`**, reescribe la URL y dirige la petición al `index.php` (Front Controller).
3.  El `index.php` analiza la URL para determinar qué controlador y qué método ejecutar (`productoController`, método `editar`, con el parámetro `5`).
4.  El **`productoController.php`** recibe la petición. Llama al **`producto.php`** (Modelo) para solicitar los datos del producto con ID 5 a la base de datos.
5.  El **Modelo** ejecuta la consulta SQL y devuelve los datos al Controlador.
6.  El **Controlador** procesa los datos y los pasa a la **Vista** correspondiente (ej: `/vista/producto/editar.php`).
7.  La **Vista** renderiza el HTML, insertando los datos del producto en un formulario, y lo envía como respuesta al navegador del usuario.

---

## 📁 Estructura de Carpetas

El proyecto está organizado siguiendo el patrón Modelo-Vista-Controlador para una clara separación de responsabilidades.
/
├── controlador/        # Contiene la lógica de negocio y coordina el modelo y la vista.
├── modelo/             # Contiene las clases que interactúan con la base de datos.
├── vista/              # Contiene todos los archivos de la interfaz de usuario (UI).
├── includes/           # Archivos de configuración y conexión a la BD.
├── .htaccess           # Reglas de reescritura de URL para Apache.
├── database_schema.sql # Script SQL para crear la estructura de la base de datos.
└── index.php           # Punto de entrada principal de la aplicación.

---

## 🤝 Cómo Contribuir

Las contribuciones son lo que hacen que la comunidad de código abierto sea un lugar increíble para aprender, inspirar y crear. Cualquier contribución que hagas será **muy apreciada**.

Si deseas contribuir, por favor sigue estos pasos:

1.  **Haz un Fork** del proyecto.
2.  Crea tu propia rama de funcionalidad (`git checkout -b feature/AmazingFeature`).
3.  Realiza tus cambios y haz commit de ellos (`git commit -m 'Add some AmazingFeature'`).
4.  Haz push a tu rama (`git push origin feature/AmazingFeature`).
5.  Abre un **Pull Request** para que tus cambios puedan ser revisados.

---

## 🎯 Tareas Pendientes y Mejoras Futuras

Este proyecto tiene un gran potencial de crecimiento. Aquí hay algunas ideas para futuras versiones:

-   [ ] **Roles y Permisos:** Implementar un sistema de roles (ej. Administrador, Vendedor) para limitar el acceso a ciertos módulos.
-   [ ] **Reportes en PDF:** Generar reportes de ventas (diarios, mensuales) en formato PDF.
-   [ ] **Dashboard de Estadísticas:** Crear un panel principal con gráficos que muestren las ventas, productos más vendidos, etc.
-   [ ] **Mejorar Seguridad:** Aplicar validación de datos más estricta en el lado del servidor y escapar toda la salida para prevenir ataques XSS.
-   [ ] **Pruebas Unitarias:** Añadir tests unitarios con PHPUnit para asegurar la fiabilidad de los modelos y controladores.
-   [ ] **API REST:** Desarrollar una API para permitir que otras aplicaciones interactúen con el sistema.

---

## 📜 Licencia

Este proyecto está distribuido bajo la Licencia MIT. Esto significa que eres libre de usar, copiar, modificar, fusionar, publicar, distribuir y vender copias del software.

Consulta el archivo `LICENSE` para más detalles.

---

## 👨‍💻 Autores y Agradecimientos

- Edwin Ronaldo Villena Pfoccori
- Angel Gabriel Calizaya Huillca
- Christian Angelgabriel Rojas Montes



¡Un agradecimiento especial a todos los que han contribuido y a la comunidad de código abierto!
