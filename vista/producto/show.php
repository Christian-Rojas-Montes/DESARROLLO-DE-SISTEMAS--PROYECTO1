<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
include $_SERVER['DOCUMENT_ROOT']."/sisventas/controlador/productoController.php";

$datos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["txtcodigo"])) {
    $codigo = trim($_POST["txtcodigo"]);
    $productoController = new ProductoController();
    $resultado = $productoController->buscar_producto($codigo); // tu método buscar del controlador

    if ($resultado) {
        $datos[] = $resultado; // lo convertimos a array para reutilizar el foreach
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
                                    <th>ID Producto</th>
                                    <th>Descripción</th>
                                    <th>Proveedor</th>
                                    <th>Categoría</th>
                                    <th>Unidad</th>
                                    <th>Stock</th>
                                    <th>Precio Unit.</th>
                                    <th>Costo Unit.</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($datos) > 0) {
                                    foreach ($datos as $fila) {
                                        ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($fila['idproducto']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['nomproducto']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['proveedor_nombre'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($fila['categoria_nombre'] ?? 'N/A'); ?></td>
                                            <td><?php echo htmlspecialchars($fila['unimed']); ?></td>
                                            <td><?php echo htmlspecialchars($fila['stock']); ?></td>
                                            <td><?php echo number_format($fila['preuni'], 2); ?></td>
                                            <td><?php echo number_format($fila['cosuni'], 2); ?></td>
                                            <td>
                                                <a href="editar.php?id=<?php echo urlencode($fila['idproducto']); ?>" class="btn btn-sm btn-warning">Editar</a>
                                                <a href="eliminar.php?id=<?php echo urlencode($fila['idproducto']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="9" class="text-center">❌ No se encontró ningún producto con ese código.</td>
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
