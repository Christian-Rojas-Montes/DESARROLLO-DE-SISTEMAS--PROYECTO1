<?php
// session_start();  <-- Opcional, agregar si quieres validar sesión

include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";

include $_SERVER['DOCUMENT_ROOT']."/sisventas/controlador/usuarioController.php";

$usuarioController = new UsuarioController();
$datos = $usuarioController->obtener_listado();
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Listado de Usuarios</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if ($datos && count($datos) > 0) {
                                    foreach ($datos as $fila) {
                                        ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($fila['idusuario']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['nomusuario']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['apellidos']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['nombres']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['email']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['estado']); ?></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No hay usuarios registrados</td>
                                    </tr>
                                <?php
                                }
                            ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>
