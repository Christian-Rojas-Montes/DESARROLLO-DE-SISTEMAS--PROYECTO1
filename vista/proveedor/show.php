<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
include $_SERVER['DOCUMENT_ROOT']."/sisventas/controlador/proveedorController.php";

$datos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["txtcodigo"])) {
    $codigo = trim($_POST["txtcodigo"]);
    $proveedorController = new ProveedorController();
    $resultado = $proveedorController->buscar_proveedor($codigo); // método en el controlador

    if ($resultado) {
        $datos[] = $resultado; // lo tratamos como array para foreach
    }
}
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
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
                                    <th>ID</th>
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
                                            <td><?= htmlspecialchars($fila['idproveedor']); ?></td>
                                            <td><?= htmlspecialchars($fila['nomproveedor']); ?></td>
                                            <td><?= htmlspecialchars($fila['rucproveedor']); ?></td>
                                            <td><?= htmlspecialchars($fila['dirproveedor']); ?></td>
                                            <td><?= htmlspecialchars($fila['telproveedor']); ?></td>
                                            <td><?= htmlspecialchars($fila['emailproveedor']); ?></td>
                                            <td>
                                                <a href="editar.php?id=<?= urlencode($fila['idproveedor']); ?>" class="btn btn-sm btn-warning">Editar</a>
                                                <a href="eliminar.php?id=<?= urlencode($fila['idproveedor']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas eliminar este proveedor?')">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center">❌ No se encontró ningún proveedor con ese código.</td>
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
