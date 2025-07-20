<?php
session_start();

// Si no hay sesión iniciada, redirige al login
if (!isset($_SESSION['usuario']) || !isset($_SESSION['id_usuario'])) { // Asegúrate de tener 'id_usuario' en sesión
    header("Location: /sisventas/vista/login.php");
    exit;
}

include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-dark text-white text-center py-3 rounded-top-3">
                    <h4 class="mb-0"><i class="fas fa-key me-2"></i> Cambiar Contraseña</h4>
                </div>
                <div class="card-body p-4">
                    <?php if (isset($_SESSION['password_change_success'])): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo htmlspecialchars($_SESSION['password_change_success']); unset($_SESSION['password_change_success']); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['password_change_error'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo htmlspecialchars($_SESSION['password_change_error']); unset($_SESSION['password_change_error']); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="/sisventas/controlador/usuarioController.php">
                        <input type="hidden" name="action" value="change_password">

                        <div class="mb-3">
                            <label for="current_password" class="form-label fw-bold">Contraseña Actual:</label>
                            <input type="password" class="form-control form-control-lg" id="current_password" name="current_password" required>
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label fw-bold">Nueva Contraseña:</label>
                            <input type="password" class="form-control form-control-lg" id="new_password" name="new_password" required>
                        </div>

                        <div class="mb-4">
                            <label for="confirm_password" class="form-label fw-bold">Confirmar Nueva Contraseña:</label>
                            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">
                                <i class="fas fa-save me-2"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>