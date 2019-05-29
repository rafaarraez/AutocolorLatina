<?php


require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if(!$conexion){
    echo "No conectado";
}

$products = obtenerProductos(8, $conexion);

require 'views/index.view.php';

?>