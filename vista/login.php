<?php

session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/header.php";

// Lógica para mostrar el mensaje de error si viene en la URL
if (isset($_GET['error'])) {
    echo '<div class="alert alert-danger text-center mt-3 mx-auto" style="max-width: 500px;" role="alert">Credenciales incorrectas</div>';
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-3">
                    <h4>Iniciar Sesión</h4>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="/sisventas/controlador/loginController.php">
                        <div class="mb-3">
                            <label for="correo" class="form-label fw-bold">Correo Electrónico:</label>
                            <input type="email" class="form-control form-control-lg" id="correo" name="correo" required placeholder="Correo" aria-label="Correo electrónico">
                        </div>
                        <div class="mb-4">
                            <label for="clave" class="form-label fw-bold">Contraseña:</label>
                            <input type="password" class="form-control form-control-lg" id="clave" name="clave" required placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/footer.php";
?>