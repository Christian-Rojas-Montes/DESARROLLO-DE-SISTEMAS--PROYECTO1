<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/navbar.php";
?>

<div class="container mt-4">
    <h3>Registrar Nueva Categoría</h3>
    <form action="grabar.php" method="POST">
        <input type="hidden" name="accion" value="grabar">

        <div class="mb-3">
            <label for="idcategoria" class="form-label">ID Categoría</label>
            <input type="text" class="form-control" name="idcategoria" id="idcategoria" maxlength="2" required>
        </div>

        <div class="mb-3">
            <label for="nomcategoria" class="form-label">Nombre de la Categoría</label>
            <input type="text" class="form-control" name="nomcategoria" id="nomcategoria" maxlength="128" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/sisventas/vista/categoria/listado.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/vista/layout/footer.php";
?>
