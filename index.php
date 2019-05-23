<?php


require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

$products = obtenerProductos($products_config['post_por_pagina'], $conexion);

require 'views/index.view.php';

?>