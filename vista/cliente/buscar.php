<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h5 class="text-center mb-4">Buscar Cliente</h5>
            <div class="card shadow">
                <div class="card-body">
                    <form name="fbuscar" method="post" action="show.php">
                        <div class="mb-3">
                            <label for="txtcodigo" class="form-label">Codigo:</label>
                            <input type="text" class="form-control" name="txtcodigo" id="txtcodigo" placeholder="Ingrese codigo del cliente" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                            <a href="listado.php" class="btn btn-secondary">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>
