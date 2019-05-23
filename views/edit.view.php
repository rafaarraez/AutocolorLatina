<?php require '../views/header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar Articulo</h2>
            <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <input type="hidden" value="<?php echo $post['product_id']; ?>" name="id">
                <input type="text" name="nombre" value="<?php echo $post['product_name']; ?>">
                <input type="text" name="sku" value="<?php echo $post['product_sku']; ?>">
                <input type="text" name="barcode" value="<?php echo $post['product_barcode']; ?>">
                <textarea name="texto"><?php echo $post['product_description']; ?></textarea>
                <input type="file" name="thumb">
                <input type="hidden" value="<?php echo $post['product_thumb']; ?>" name="thumb-guardada"> 
                <input type="submit" value="Modificar Articulo">
                
            </form>
        </article>
    </div>
</div>


<?php require '../views/footer2.php'; ?> 