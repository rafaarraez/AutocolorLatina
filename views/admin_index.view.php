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
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=ABRASIVOS">ABRASIVOS</a>
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=SELLADORES_Y_RECUBRIMIENTOS">SELLADORES Y RECUBRIMIENTOS</a>
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=MISCELANEOS">MISCELANEOS</a>
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=HERRAMIENTAS_Y_EQUIPOS">HERRAMIENTAS Y EQUIPOS</a>
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=ADHESIVOS">ADHESIVOS</a>
    <a class="nav-item nav-link nav-item-cat" href="index.php?product_cat=REVESTIMIENTOS">REVESTIMIENTOS</a>

</nav>

<section class="section-padding">
    <center>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-success" href="<?php echo RUTA ?>/admin/nuevo.php">NUEVO PRODUCTO</a>
                    <a class="btn btn-danger" href="<?php echo RUTA ?>/admin/cerrar.php">Cerrar Sesion</a>
                </div>
                <hr>
                <?php foreach ($products as $product) : ?>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 ">
                        <div class="card-producto">
                            <div class="card-thumb">
                                <img src="<?php echo RUTA; ?>/src/img/productos/<?php echo $product['product_thumb']; ?>" alt="">
                                <p><?php echo $product['product_name'] ?></p>
                            </div>
                            <div class="btn-modal">
                                <a style="color:#fff;" href="edit.php?product_id=<?php echo $product['product_id']; ?>" class="btn btn-success">Editar</a>
                                <a style="color:#fff;" href="#" data-toggle="modal" data-target=".bd-example-modal-lg-<?php echo $product['product_id'] ?>" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg-<?php echo $product['product_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 row section-padding-us">
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="card-producto">
                          <img src="<?php echo RUTA; ?>/src/img/productos/<?php echo $product['product_thumb']; ?>" alt="<?php echo $product['product_name'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="container caja-de-modal">
                          <h1><?php echo $product['product_name'] ?></h1>
                          <h6>¿Desea eliminar este artículo?</h6>
                          <br>
                          <a style="color:#fff;" class="btn btn-danger" href="delete.php?product_id=<?php echo $product['product_id']; ?>"  >Eliminar arituculo</a>
                          <br>
                          <br>
                          <br>
                          <a style="color:#fff;" class="btn btn-success" data-dismiss="modal">Salir</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

                <?php endforeach; ?>
            </div>
        </div>
    </center>

    <?php require '../paginacion.php'; ?>
    <!-- <div class="col-12">
        <div class="section-title-header text-center">
          <a href="javascript:;" id="cambia" class="btn btn-common btn-mas" onclick="FbotonOn(this)">MOSTRAR MÁS</a>
        </div>
      </div> -->


</section>





<?php require '../views/footer2.php'; ?>