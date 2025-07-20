<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/navbar.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/modelo/proveedor.php";
include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/modelo/categoria.php";

// Obtener proveedores y categorías
$provObj = new Proveedor();
$proveedores = $provObj->listado();

$catObj = new Categoria();
$categorias = $catObj->listado();
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Nuevo Producto</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="grabar.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idproducto" class="form-label">ID Producto *</label>
                                <input type="text" class="form-control" id="idproducto" name="idproducto" required maxlength="10">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre del Producto *</label>
                                <input type="text" class="form-control" id="nombre" name="nomprod" required maxlength="128">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="unimed" class="form-label">Unidad de Medida</label>
                                <input type="text" class="form-control" id="unimed" name="unimed" maxlength="32">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="preuni" class="form-label">Precio Unitario</label>
                                <input type="text" class="form-control" id="preuni" name="preuni" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cosuni" class="form-label">Costo Unitario</label>
                                <input type="text" class="form-control" id="cosuni" name="cosuni" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="idproveedor" class="form-label">Proveedor</label>
                                <select name="idproveedor" id="idproveedor" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    <?php foreach ($proveedores as $prov): ?>
                                        <option value="<?= $prov['idproveedor'] ?>"><?= $prov['nomproveedor'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="idcategoria" class="form-label">Categoría</label>
                                <select name="idcategoria" id="idcategoria" class="form-select" required>
                                    <option value="">Seleccione</option>
                                    <?php foreach ($categorias as $cat): ?>
                                        <option value="<?= $cat['idcategoria'] ?>"><?= $cat['nomcategoria'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" id="estado" class="form-select" required>
                                <option value="A">Activo</option>
                                <option value="I">Inactivo</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="listado.php" class="btn btn-secondary">Cancelar</a>
                            <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/sisventas/vista/layout/footer.php"; ?>
