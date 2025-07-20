<?php
include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/categoriaController.php";
include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/navbar.php";

// Obtener ID desde la URL
if (!isset($_GET['id'])) {
    header("Location: listado.php");
    exit();
}

$id = $_GET['id'];
$control = new CategoriaController();
$categoria = $control->buscar_categoria($id);

if (!$categoria) {
    header("Location: listado.php?error=Categoría no encontrada");
    exit();
}
?>

<div class="container mt-4">
    <h2>Editar Categoría</h2>
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="idcategoria" class="form-label">ID Categoría</label>
            <input type="text" name="idcategoria" id="idcategoria" class="form-control" value="<?= $categoria['idcategoria'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nomcategoria" class="form-label">Nombre de Categoría</label>
            <input type="text" name="nomcategoria" id="nomcategoria" class="form-control" value="<?= $categoria['nomcategoria'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="listado.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/footer.php"; ?>
