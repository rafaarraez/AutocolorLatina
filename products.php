<?php

require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

if(isset($_GET['product_cat'])){
    $cat = limpiarDatos($_GET['product_cat']);
    $products = obtenerProductosPorCat($products_config['post_por_pagina'], $conexion, $cat);
}else{
    $products = obtenerProductos($products_config['post_por_pagina'], $conexion);

}

require 'views/products.view.php';

?>