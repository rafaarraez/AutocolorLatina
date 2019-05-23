<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $categoria = $_POST['categoria'];
    $nombre = limpiarDatos($_POST['nombre']);
    $sku = limpiarDatos($_POST['sku']);
    $barcode = limpiarDatos($_POST['barcode']);
    $texto = $_POST['texto'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $arcchivo_subido = '../' . $products_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

    move_uploaded_file($thumb, $arcchivo_subido);

    $statement = $conexion->prepare(
    'INSERT INTO products (product_id, product_cat, product_name, product_sku, product_barcode, product_description, product_thumb)
    VALUES (null, :category, :nombre, :sku, :barcode, :texto, :thumb)'
    );

    $statement->execute(array(
        ':category' => $categoria,
        ':nombre' => $nombre,
        ':sku' => $sku,
        ':barcode' => $barcode,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: '. RUTA . '/admin');
}

require '../views/nuevo.view.php';

?>