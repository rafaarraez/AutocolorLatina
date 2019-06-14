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
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb'];

    if (empty($thumb['name'])) {
        # code...
        $thumb = $thumb_guardada;
    } else {
        $archivo_subido = '../' . $products_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare(
        'UPDATE products SET 
        product_cat = :product_cat, 
        product_name = :product_name, 
        product_sku = :product_sku, 
        product_description = :product_description, 
        product_thumb = :thumb 
        WHERE product_id = :id'
    );


    $statement->execute(array(
        ':product_cat' => $categoria,
        ':product_name' => $nombre,
        ':product_sku' => $sku,
        ':product_description' => $texto,
        ':thumb' => $thumb,
        ':id' => $id
    ));


    header('Location: ' . RUTA . '/admin');

} else {
    $id_articulo = id_articulo($_GET['product_id']);

    if (empty($id_articulo)) {
        # code...
        header('Location: ' . RUTA . '/admin');
    }

    $post = obtener_post_por_id($conexion, $id_articulo);

    if (!$post) {
        # code...
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];
    
}

require '../views/edit.view.php';

?>