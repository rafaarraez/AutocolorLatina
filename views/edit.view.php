<?php require '../views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../new/css/util.css">
    <link rel="stylesheet" type="text/css" href="../new/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <span class="contact100-form-title">
                    Editar Producto
                </span>
                <input type="hidden" value="<?php echo $post['product_id']; ?>" name="id">
                <div class="wrap-input100 input100-select">
                    <div>
                        <span class="label-input100">Categoría</span>
                        <select class="selection-2" name="categoria">
                            <option selected disabled><?php echo $post['product_cat']; ?></option>
                            <option value="ABRASIVOS">ABRASIVOS</option>
                            <option value="SELLADORES_Y_RECUBRIMIENTOS">SELLADORES Y RECUBRIMIENTOS</option>
                            <option value="MISCELANEOS">MISCELANEOS</option>
                            <option value="HERRAMIENTAS_Y_EQUIPOS">HERRAMIENTAS Y EQUIPOS</option>
                            <option value="ADHESIVOS">ADHESIVOS</option>
                            <option value="REVESTIMIENTOS">REVESTIMIENTOS</option>
                        </select>
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Nombre</span>
                    <input class="input100" type="text" name="nombre" value="<?php echo $post['product_name']; ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">SKU del Articulo</span>
                    <input class="input100" type="text" name="sku" value="<?php echo $post['product_sku']; ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Codigo de barras del Articulo</span>
                    <input class="input100" type="text" name="barcode" value="<?php echo $post['product_barcode']; ?>">
                    <span class="focus-input100"></span>
                </div>




                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Descripcion del articulo</span>
                    <textarea class="input100" name="texto"><?php echo $post['product_description']; ?></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Imagen del producto</span>
                    <input type="file" name="thumb">
                    <input type="hidden" value="<?php echo $post['product_thumb']; ?>" name="thumb-guardada"> 
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <button class="contact100-form-btn">
                            <span>
                                Modificar Producto
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn-back"></div>
                        <button href="<?php echo RUTA ?>/admin/" class="contact100-form-btn-back">
                            <span>
                                <i class="fa fa-long-arrow-left m-l-7" aria-hidden="true"></i>
                                Volver a productos
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="../new/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../new/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../new/vendor/bootstrap/js/popper.js"></script>
    <script src="../new/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../new/vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script src="../new/vendor/daterangepicker/moment.min.js"></script>
    <script src="../new/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../new/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../new/js/main.js"></script>

</body>

</html>


<?php require '../views/footer2.php'; ?> 