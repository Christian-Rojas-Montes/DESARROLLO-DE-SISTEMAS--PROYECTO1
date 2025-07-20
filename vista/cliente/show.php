<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/controlador/clienteController.php";

$datos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["txtcodigo"])) {
    $codigo = trim($_POST["txtcodigo"]);
    $clienteController = new ClienteController();
    $resultado = $clienteController->buscar_cliente($codigo);

    if ($resultado) {
        $datos[] = $resultado; // Convertimos a array para usar foreach
    }
}
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Resultado de Búsqueda</h5>
                    <a href="buscar.php" class="btn btn-secondary">Volver</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID Cliente</th>
                                    <th>Nombre</th>
                                    <th>RUC</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($datos) > 0): ?>
                                    <?php foreach ($datos as $fila): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($fila['idcliente']) ?></td>
                                            <td><?= htmlspecialchars($fila['nomcliente']) ?></td>
                                            <td><?= htmlspecialchars($fila['ruccliente']) ?></td>
                                            <td><?= htmlspecialchars($fila['dircliente']) ?></td>
                                            <td><?= htmlspecialchars($fila['telcliente']) ?></td>
                                            <td><?= htmlspecialchars($fila['emailcliente']) ?></td>
                                            <td>
                                                <a href="editar.php?id=<?= urlencode($fila['idcliente']) ?>" class="btn btn-sm btn-warning">Editar</a>
                                                <a href="eliminar.php?id=<?= urlencode($fila['idcliente']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este cliente?')">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">❌ No se encontró ningún cliente con ese código.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>
