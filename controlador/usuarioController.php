<?php
if (!defined('USUARIO_CONTROLLER_INCLUDED')) {
    define('USUARIO_CONTROLLER_INCLUDED', true);

    include $_SERVER['DOCUMENT_ROOT']."/sisventas/modelo/usuario.php";

    class UsuarioController{

        public function obtener_listado(){
            $listado = new Usuario();
            $res = $listado->listado();
            return $res;
        }

        // *** NUEVO MÉTODO: actualizarPassword ***
        public function actualizarPassword($idusuario, $currentPassword, $newPassword) {
            $usuario = new Usuario();
            // Llama al método del modelo para cambiar la contraseña
            $result = $usuario->cambiarPassword($idusuario, $currentPassword, $newPassword);
            return $result; // true si éxito, false si contraseña actual incorrecta o fallo
        }
    }
}

// *** Lógica para manejar la solicitud POST del formulario de cambio de contraseña ***
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'change_password') {
    session_start(); // Asegurarse de que la sesión esté iniciada para acceder a $_SESSION

    if (!isset($_SESSION['id_usuario'])) { // Asumiendo que guardas el ID del usuario en sesión
        // Si el ID de usuario no está en sesión, redirigir al login
        header("Location: /sisventas/vista/login.php");
        exit;
    }

    $id_usuario_logueado = $_SESSION['id_usuario']; // Obtener el ID del usuario logueado
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validaciones básicas en el controlador (pueden ser más robustas)
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        $_SESSION['password_change_error'] = "Todos los campos son obligatorios.";
        header("Location: /sisventas/vista/usuario/cambiar_password.php");
        exit;
    }

    if ($new_password !== $confirm_password) {
        $_SESSION['password_change_error'] = "Las nuevas contraseñas no coinciden.";
        header("Location: /sisventas/vista/usuario/cambiar_password.php");
        exit;
    }
    
    // Aquí puedes añadir validaciones de complejidad para la nueva contraseña (longitud mínima, caracteres, etc.)

    $usuarioController = new UsuarioController();
    $cambio_exitoso = $usuarioController->actualizarPassword($id_usuario_logueado, $current_password, $new_password);

    if ($cambio_exitoso) {
        $_SESSION['password_change_success'] = "Contraseña cambiada exitosamente.";
        header("Location: /sisventas/vista/usuario/cambiar_password.php");
        exit;
    } else {
        $_SESSION['password_change_error'] = "Contraseña actual incorrecta o error al actualizar.";
        header("Location: /sisventas/vista/usuario/cambiar_password.php");
        exit;
    }
}
?>