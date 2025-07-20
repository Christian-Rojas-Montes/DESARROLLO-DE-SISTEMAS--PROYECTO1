<?php
include $_SERVER['DOCUMENT_ROOT']."/sisventas/controlador/productoController.php";

$id = $_GET['id'] ?? '';

if ($id) {
    $producto = new ProductoController();
    $resultado = $producto->elimina_producto($id);

    if ($resultado) {
        header("Location: listado.php?mensaje=Producto eliminado exitosamente");
    } else {
        header("Location: listado.php?error=Error al eliminar producto");
    }
} else {
    header("Location: listado.php?error=ID de producto no válido");
}
?> 