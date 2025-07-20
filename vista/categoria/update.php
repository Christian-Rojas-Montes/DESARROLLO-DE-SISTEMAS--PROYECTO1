<?php
include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/categoriaController.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $idcategoria = $_POST['idcategoria'];
    $nomcategoria = $_POST['nomcategoria'];

    $control = new CategoriaController();
    $resultado = $control->actualiza_categoria($idcategoria, $nomcategoria);

    if ($resultado) {
        header("Location: listado.php?mensaje=Categoría actualizada exitosamente");
    } else {
        header("Location: editar.php?id=$idcategoria&error=No se pudo actualizar la categoría");
    }
} else {
    header("Location: listado.php");
}
