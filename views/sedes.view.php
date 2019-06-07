<?php require 'views/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo RUTA ?>/src/img/secciones/app-1.jpg" class="img-fluid" alt="Responsive image">
    </div>

</div>

<div class="margi"></div>

<section class="section-padding-sede">

    <div class="margin">
        <div class="col-12">
            <div class="section-title-us">
                <div class="margin-left">
                    <h1>NUESTRA <br /> SEDE</h1>
                </div>
            </div>
        </div>

        <div class="map container">
            <iframe src="https://maps.google.com/maps?width=800&amp;height=440&amp;hl=en&amp;q=autocolor%20latina+(T%C3%ADtulo)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" align="middle"></iframe>
            <style>
                #gmap_canvas img {
                    max-width: none !important;
                    background: none !important;
                }
            </style>

        </div>
    </div>
</section>



<?php require 'views/footer2.php'; ?>