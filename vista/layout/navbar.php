<?php
// Es crucial iniciar la sesión aquí si este archivo se incluye en páginas
// que necesitan acceder a $_SESSION, como el nombre de usuario para el mensaje de bienvenida.
// Si ya tienes session_start() en el archivo principal que incluye esta navbar,
// puedes omitirlo aquí para evitar errores de "session already started".
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/sisventas">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="archivosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Archivos
          </a>
          <ul class="dropdown-menu" aria-labelledby="archivosDropdown">
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/producto/listado.php">Productos</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/cliente/listado.php">Clientes</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/proveedor/listado.php">Proveedores</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/categoria/listado.php">Categorías</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/usuario/listado.php">Usuarios</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="procesosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Procesos
          </a>
          <ul class="dropdown-menu" aria-labelledby="procesosDropdown">
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/venta/registrar.php">Registrar Ventas</a></li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/venta/listado.php">Listado de Ventas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="consultasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Consultas
          </a>
          <ul class="dropdown-menu" aria-labelledby="consultasDropdown">
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/consulta/stock.php">Stock Productos</a></li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/consulta/ventas_fecha.php">Ventas por Fecha</a></li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/consulta/ventas_cliente.php">Ventas por Cliente</a></li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/consulta/ventas_producto.php">Ventas por Producto</a></li>
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/consulta/ranking.php">Ranking Ventas</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="herramientasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Herramientas
          </a>
          <ul class="dropdown-menu" aria-labelledby="herramientasDropdown">
            <li><a class="dropdown-item" href="http://localhost/sisventas/vista/usuario/cambiar_password.php">Cambiar Password</a></li>
          </ul>
        </li>
      </ul>

      <div class="d-flex">
        <a href="http://localhost/sisventas/controlador/logoutController.php" class="btn btn-outline-danger">Cerrar Sesión</a>
      </div>
    </div>
  </div>
</nav>