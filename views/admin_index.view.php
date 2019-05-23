<?php require '../views/header.php'; ?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title">Seccion de Administrador</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="nav nav-pills nav-fill nav-categ">
    <a class="nav-item nav-link nav-item-cat" href="#">ABRASIVOS</a>
    <a class="nav-item nav-link nav-item-cat" href="#">SELLADORES Y RECUBRIMIENTOS</a>
    <a class="nav-item nav-link nav-item-cat" href="#">MISCELANEOS</a>
    <a class="nav-item nav-link nav-item-cat" href="#">HERRAMIENTAS Y EQUIPOS</a>
    <a class="nav-item nav-link nav-item-cat" href="#">ADHESIVOS</a>
    <a class="nav-item nav-link nav-item-cat" href="#">REVESTIMIENTOS</a>
    <a class="btn btn-success" href="<?php echo RUTA ?>/admin/nuevo.php">NUEVO PRODUCTO</a>
    <a class="btn btn-danger" href="<?php echo RUTA ?>/admin/cerrar.php">Cerrar Sesion</a>
</nav>

<section class="section-padding">
    <div class="container">
        <div class="row">

            <center>
                <div class="container">
                    <div class="row">
                        <?php foreach ($products as $product) : ?>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 ">
                                <div class="card-producto">
                                    <img src="<?php echo RUTA; ?>/src/img/<?php echo $product['product_thumb']; ?>" alt="">
                                    <p><?php echo $product['product_name']?></p>
                                    <div class="btn-modal">
                                        <a href="edit.php?product_id=<?php echo $product['product_id']; ?>" class="btn btn-success">Editar</a>
                                        <a href="delete.php?product_id=<?php echo $product['product_id']; ?>" class="btn btn-danger">Eliminar</a>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3mtm-ppstm-type-h-o-mini-large-pressure-cup-16121-16124.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-scotchblok-masking-paper-06718.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/scotch-steel-gray-masking-paper-06518.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-accuspray-air-flow-control-valve-16573-1-per-case.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-overspray-masking-liquid-dry-06847-1-gallon.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-automotive-refinish-masking-tape.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/06545.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 ">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/highlandtm-masking-tape-2727-06544.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3mtm-ppstm-type-h-o-mini-large-pressure-cup-16121-16124.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-scotchblok-masking-paper-06718.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/scotch-steel-gray-masking-paper-06518.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-accuspray-air-flow-control-valve-16573-1-per-case.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-overspray-masking-liquid-dry-06847-1-gallon.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/3m-automotive-refinish-masking-tape.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
                            <div class="card-producto">
                                <img src="<?php echo RUTA ?>/src/img/productos/06545.jpg" alt="">
                                <div class="btn-modal">
                                    <a href="#" class="btn btn-success">Editar</a>
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div> -->

                    </div>

                </div>
            </center>

            <div class="col-12">
                <div class="section-title-header text-center">
                    <a href="javascript:;" id="cambia" class="btn btn-common btn-mas" onclick="FbotonOn(this)">MOSTRAR MÁS</a>
                </div>
            </div>

        </div>
    </div>
</section>





<?php require '../views/footer2.php'; ?>