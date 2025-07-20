<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/ClienteController.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/navbar.php";

// Validar que venga el ID por GET
$id = $_GET['id'] ?? '';
$control = new ClienteController();
$cliente = $control->buscar_cliente($id);

// Validar que el cliente exista
if (!$cliente) {
    header("Location: listado.php?error=Cliente no encontrado");
    exit;
}
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Editar Cliente</h5>
                </div>
                <div class="card-body">
                    <form action="update.php" method="POST">
                        <input type="hidden" name="idcliente" value="<?= $cliente['idcliente'] ?>">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idcliente_display" class="form-label">ID Cliente</label>
                                <input type="text" class="form-control" id="idcliente_display" value="<?= $cliente['idcliente'] ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nomcliente" class="form-label">Nombre del Cliente *</label>
                                <input type="text" class="form-control" name="nomcliente" id="nomcliente" value="<?= htmlspecialchars($cliente['nomcliente']) ?>" required maxlength="128">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="ruccliente" class="form-label">RUC</label>
                                <input type="text" class="form-control" name="ruccliente" id="ruccliente" value="<?= htmlspecialchars($cliente['ruccliente']) ?>" maxlength="11">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telcliente" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" name="telcliente" id="telcliente" value="<?= htmlspecialchars($cliente['telcliente']) ?>" maxlength="9">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="dircliente" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="dircliente" id="dircliente" value="<?= htmlspecialchars($cliente['dircliente']) ?>" maxlength="128">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="emailcliente" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" name="emailcliente" id="emailcliente" value="<?= htmlspecialchars($cliente['emailcliente']) ?>" maxlength="64">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="listado.php" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-warning">Actualizar Cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>
