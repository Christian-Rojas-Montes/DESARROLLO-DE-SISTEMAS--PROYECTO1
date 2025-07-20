<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/CategoriaController.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $control = new CategoriaController();
    $resultado = $control->elimina_categoria($id);

    if ($resultado) {
        header("Location: listado.php?mensaje=Categoría eliminada exitosamente");
    } else {
        header("Location: listado.php?error=No se pudo eliminar la categoría");
    }
    exit();
} else {
    header("Location: listado.php");
    exit();
}
