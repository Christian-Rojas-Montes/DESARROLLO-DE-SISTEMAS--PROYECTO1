<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/CategoriaController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['idcategoria'];
    $nom = $_POST['nomcategoria'];

    $control = new CategoriaController();
    $resultado = $control->inserta_categoria($id, $nom);

    if ($resultado) {
        header("Location: listado.php?mensaje=Categoría registrada exitosamente");
        exit();
    } else {
        header("Location: crear.php?error=No se pudo registrar la categoría");
        exit();
    }
} else {
    header("Location: listado.php");
    exit();
}
