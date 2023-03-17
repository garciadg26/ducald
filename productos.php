    <?php 
        $title = "Productos | Pinturas DUCALD";
        $description = "Fabricamos pinturas y productos de calidad a un precio justo, logrando satisfacer las necesidades de todos y cada uno de nuestros clientes.";
    ?>
    <?php include_once "Public/include/head.php"; ?>
</head>
<body>

    <?php include_once "Public/include/nav.php"; ?>
    <?php include_once "Public/include/navProduct.php"; ?>

    <!-- HEAD PHOTO -->
    <section id="head_product" class="sec_head_product">
        <img class="img-fluid" src="Public/images/Pinturas-ducald-head_productos.jpg" alt="">
    </section>

    <!-- CALCULAR LITROS -->
    <section id="calc_litros" class="sec_litros">
        <div class="cont_encabezado text-center">
            <h2 class="tit_principal home__photo1">DUCALD es la pintura de inmejorables características.<br>
                Poder cubriente, lavabilidad y resistencia a la intemperie.
            </h2>
            <h4 class="subtit_principal home__photo2">DUCALD forma una película plástica con excelente satinado que se aplica a superficies de yeso, cemento, concreto, tablaroca, papel, madera, manpostería, entre muchas otras; brinda acabados de calidad, mientras cuida los materiales de la oxidación.</h4>
        </div>
        <div class="container cont_form_litros">
            <h2 class="tit_principal text-center mb-4 home__photo2">¿Cuántos litros necesito?</h2>
            <div class="cont_form_calc">
                <form id="form_litros" class="form_general home__photo1" action="" method="post">
                    <div class="group_input">
                        <label for="nAreaINP">Ingresa el área a cubrir con Pinturas Ducald (metros cuadrados)</label>
                        <input type="number" name="nAreaINP" id="nAreaINP" placeholder="Ejemplo: 55">
                    </div>
                    <div class="group_input">
                        <label for="nAreaINP">Selecciona el producto a utilizar</label>
                        <input type="number" name="nAreaINP" id="nAreaINP" placeholder="Dulcad Satinada">
                    </div>
                    <input id="btn_form" type="submit" value="Calcular">
                </form>
                <div class="cont_return_form">
                    <h3 class="tit_return">Necesitas 5 litros</h3>
                    <div class="row w-300">
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <p class="number_retur">2</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <h6 class="subTit_return">Galones</h6>
                                    <p class="caption_return">4 Litros</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <p class="number_retur">0</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <h6 class="subTit_return">Cubetas</h6>
                                    <p class="caption_return">19 Litros</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <p class="number_retur">0</p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <h6 class="subTit_return">Tambores</h6>
                                    <p class="caption_return">200 Litros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="txt_general text-center mt-3">*El resultado es un dato aproximado. Pregunta por la cantidad de litros recomendada en tu tienda más cercana. Existen distintas variaciones en la cantidad de pintura requerida, como el tipo de muro, la herramienta y la técnica.</p>
            <div class="cont_img_balse text-center">
                <img class="img-fluid home__photo1" src="Public/images/logotipo-balse-terminados.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- BANNER MADERAS -->
    <section id="banner_maderas" class="sec_banner_maderas">
        <div class="container text-center">
            <h2 class="tit_principal mb-4 home__photo1">LA MEJOR SOLUCIÓN PARA MADERAS</h2>
            <p class="txt_general home__photo2">Hemos invertido toda nuestra experiencia desarrollando productos acrílicos y esmaltes, para crear una línea de terminados para madera, BALSE.</p>
        </div>
    </section>
    
<?php include_once "Public/include/bannerDistribuidor.php" ?>

    <?php include_once "Public/include/footer.php"; ?>
</body>
</html>