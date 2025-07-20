<?php
if (!defined('USUARIO_INCLUDED')) {
    define('USUARIO_INCLUDED', true);

    include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/includes/db.php";

    class Usuario {
        private $con;

        public function __construct() {
            $db = new DBConection();
            $this->con = $db->conectar();
        }

        public function verificarLogin($email, $password) {
            $sql = "SELECT idusuario, nomusuario, apellidos, nombres, email, estado FROM usuarios WHERE email = :email AND password = :password AND estado = 'A'";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password); // NOTA: Considera encriptar contraseñas (ej. password_hash)
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function listado() {
            $sql = "SELECT idusuario, nomusuario, apellidos, nombres, email, estado FROM usuarios";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // *** NUEVO MÉTODO: cambiarPassword ***
        // Recibe el ID del usuario, la contraseña actual y la nueva contraseña.
        // Retorna true si se actualizó, false en caso contrario.
        public function cambiarPassword($idusuario, $currentPassword, $newPassword) {
            // Paso 1: Verificar la contraseña actual (muy importante por seguridad)
            $sql_verify = "SELECT idusuario FROM usuarios WHERE idusuario = :idusuario AND password = :currentPassword";
            $stmt_verify = $this->con->prepare($sql_verify);
            $stmt_verify->bindParam(":idusuario", $idusuario);
            $stmt_verify->bindParam(":currentPassword", $currentPassword);
            $stmt_verify->execute();

            if ($stmt_verify->rowCount() === 0) {
                return false; // Contraseña actual incorrecta
            }

            // Paso 2: Actualizar la nueva contraseña
            $sql_update = "UPDATE usuarios SET password = :newPassword WHERE idusuario = :idusuario";
            $stmt_update = $this->con->prepare($sql_update);
            $stmt_update->bindParam(":newPassword", $newPassword); // NOTA: De nuevo, encriptar aquí
            $stmt_update->bindParam(":idusuario", $idusuario);
            
            return $stmt_update->execute(); // Devuelve true si la actualización fue exitosa, false si falló
        }
    }
}
?>