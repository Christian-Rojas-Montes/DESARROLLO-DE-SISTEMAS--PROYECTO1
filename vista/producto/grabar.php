<?php
include $_SERVER['DOCUMENT_ROOT'] . "/sisventas/controlador/ProductoController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $idproducto   = $_POST["idproducto"];
    $idproveedor  = $_POST["idproveedor"];
    $nomproducto  = $_POST["nomprod"];
    $unimed       = strtoupper($_POST["unimed"]);
    $stock        = $_POST["stock"];
    $preuni       = $_POST["preuni"];
    $cosuni       = $_POST["cosuni"];
    $idcategoria  = $_POST["idcategoria"];
    $estado       = $_POST["estado"];

    // Crear instancia del controlador y llamar al método
    $producto = new ProductoController();
    $resultado = $producto->inserta_producto($idproducto, $idproveedor, $nomproducto, $unimed, $stock, $preuni, $cosuni, $idcategoria, $estado);

    // Redirigir según resultado
    if ($resultado) {
        header("Location: listado.php?mensaje=Producto agregado exitosamente");
    } else {
        header("Location: crear.php?error=No se pudo agregar el producto");
    }
} else {
    header("Location: listado.php");
}
