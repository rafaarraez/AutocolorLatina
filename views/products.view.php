<?php require 'views/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo RUTA ?>/src/img/secciones/productos.jpg" class="img-fluid" alt="Responsive image">
    </div>

</div>
<nav class="nav nav-pills nav-fill nav-categ">
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=ABRASIVOS">ABRASIVOS</a>
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=SELLADORES_Y_RECUBRIMIENTOS">SELLADORES Y RECUBRIMIENTOS</a>
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=MISCELANEOS">MISCELANEOS</a>
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=HERRAMIENTAS_Y_EQUIPOS">HERRAMIENTAS Y EQUIPOS</a>
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=ADHESIVOS">ADHESIVOS</a>
  <a class="nav-item nav-link nav-item-cat" href="products.php?product_cat=REVESTIMIENTOS">REVESTIMIENTOS</a>
</nav>


<section class="section-padding">

  <center>
    <div class="container">
      <div class="row mar">

        <?php foreach ($products as $product) : ?>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6">
            <div class="card-producto">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-xl-<?php echo $product['product_id'] ?>">
                <div class="card-thumb">
                  <img src="<?php echo RUTA; ?>/src/img/<?php echo $product['product_thumb']; ?>" alt="<?php echo $product['product_name'] ?>">
                </div>
                <div class="btn-modal">
                  <p><?php echo $product['product_name'] ?></p>
                  <i class="far fa-eye"></i>
                </div>
              </a>
            </div>
          </div>

          <div class="modal fade bd-example-modal-xl-<?php echo $product['product_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 row section-padding-us">
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="card-producto">
                          <img src="<?php echo RUTA; ?>/src/img/<?php echo $product['product_thumb']; ?>" alt="<?php echo $product['product_name'] ?>">
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="container caja-de-modal">
                          <h1><?php echo $product['product_name'] ?></h1>
                          <h6>CODIGO DE PRODUCTO</h6>
                          <p><?php echo $product['product_sku'] ?></p>
                          <h6>CODIGO DE BARRA</h6>
                          <p><?php echo $product['product_barcode'] ?></p>
                          <h6>DESCRIPCIÓN DE PRODUCTO</h6>
                          <p><?php echo $product['product_description'] ?></p>
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

  <?php require 'paginacion.php'; ?>
  <!-- <div class="col-12">
        <div class="section-title-header text-center">
          <a href="javascript:;" id="cambia" class="btn btn-common btn-mas" onclick="FbotonOn(this)">MOSTRAR MÁS</a>
        </div>
      </div> -->

</section>





<?php require 'views/footer.php'; ?>