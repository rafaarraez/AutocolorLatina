<?php require '../views/header.php'; ?>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title">Seccion de Administrador - nuevo producto</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo Articulo</h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <select name="categoria" class="form-control">
                    <option selected>Categoria de articulo</option>
                    <option value="ABRASIVOS">ABRASIVOS</option>
                    <option value="SELLADORES_Y_RECUBRIMIENTOS">SELLADORES Y RECUBRIMIENTOS</option>
                    <option value="MISCELANEOS">MISCELANEOS</option>
                    <option value="HERRAMIENTAS_Y_EQUIPOS">HERRAMIENTAS Y EQUIPOS</option>
                    <option value="ADHESIVOS">ADHESIVOS</option>
                    <option value="REVESTIMIENTOS">REVESTIMIENTOS</option>
                </select>
                <input type="text" name="nombre" placeholder="Nombre del Articulo">
                <input type="text" name="sku" placeholder="SKU del Articulo">
                <input type="text" name="barcode" placeholder="Codigo de barras del Articulo">
                <textarea name="texto" placeholder="Descripcion del articulo"></textarea>
                <input type="file" name="thumb">
                <input type="submit" value="Crear Articulo">
            </form>
        </article>
    </div>
</div>

</section>






<?php require '../views/footer2.php'; ?>