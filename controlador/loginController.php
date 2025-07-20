<?php
session_start();

include $_SERVER['DOCUMENT_ROOT']."/sisventas/modelo/usuario.php";

$correo = $_POST["correo"];
$clave = $_POST["clave"];

$user = new Usuario();
$datos_usuario = $user->verificarLogin($correo, $clave);

if ($datos_usuario) {
    // Si las credenciales son correctas, guarda los datos del usuario en la sesión
    $_SESSION['usuario'] = $datos_usuario['email']; // Guarda el email para el mensaje de bienvenida
    $_SESSION['id_usuario'] = $datos_usuario['idusuario']; // <--- ¡AÑADE ESTA LÍNEA!
    $_SESSION['nomusuario'] = $datos_usuario['nomusuario']; // Opcional: para usar el nombre de usuario en el saludo

    // Redirige al usuario a la página principal
    header("Location: /sisventas/index.php");
    exit();
} else {
    // Si las credenciales son incorrectas, redirige al login con un mensaje de error
    header("Location: /sisventas/vista/login.php?error=credenciales");
    exit();
}
?>