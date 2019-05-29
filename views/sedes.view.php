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

<div class="margi"></div>

<section class="section-padding">

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