<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

$products = obtenerProductos($products_config['post_por_pagina'], $conexion);
require '../views/admin_index.view.php';

?>