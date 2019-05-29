<?php require 'views/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo RUTA ?>/src/img/dsc01115-recorte-miguel-zaragoza.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo RUTA ?>/src/img/dsc01115-recorte-miguel-zaragoza.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo RUTA ?>/src/img/dsc01115-recorte-miguel-zaragoza.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title-header text-center">
          <h1 class="section-title">Nuestra Marcas Líderes</h1>
        </div>
      </div>


      <div class="col-12 row section-padding-us">

        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
          <div class="card-marca">
            <img src="<?php echo RUTA ?>/src/img/marcas/3m-1.png" alt="">
          </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
          <div class="card-marca">
            <img src="<?php echo RUTA ?>/src/img/marcas/axalta-1.png" alt="">
          </div>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
          <div class="card-marca">
            <img src="<?php echo RUTA ?>/src/img/marcas/norton-1.png" alt="">
          </div>
        </div>

      </div>




    </div>
</section>

<section class="section-padding">
  <div class="col-12">
    <div class="section-title-header text-center">
      <h1 class="section-title">NUESTROS PRODUCTOS</h1>
    </div>
  </div>

  <center>
    <div class="container">

      <div class="row mar">
        <?php foreach ($products as $product) : ?>
          <div class="col-sm-6 col-md-6 col-lg-3 col-xs-6 ">
            <div class="card-producto">
              <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg-<?php echo $product['product_id'] ?>">
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

          <div class="modal fade bd-example-modal-lg-<?php echo $product['product_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 row section-padding-us">
                      <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="card-producto">
                          <img src="<?php echo RUTA; ?>/src/img/<?php echo $product['product_thumb']; ?>" alt="">
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

  <div class="col-12">
    <div class="section-title-header text-center">
      <a href="products.php" id="cambia" class="btn btn-common btn-mas" onclick="FbotonOn(this)">MOSTRAR MÁS</a>
    </div>
  </div>

</section>



<?php require 'views/footer.php'; ?>