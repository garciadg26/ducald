    <?php 
        $title = "Esmalte | Pinturas DUCALD";
        $description = "Fabricamos pinturas y productos de calidad a un precio justo, logrando satisfacer las necesidades de todos y cada uno de nuestros clientes.";
    ?>
    <?php include_once "Public/include/head.php"; ?>
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <?php include_once "Public/include/navProduct.php"; ?>

    <!-- 4 PRODUCTOS -->
    <section id="sec_for_product" class="sec_pintura_producto">
        <div class="cont_encabezado text-center">
            <h2 class="tit_principal_bk home__photo1">Esmalte</h2>
            <h4 class="subtit_principal home__photo2">Cuenta con notable flexibilidad y adherencia, resistente a la intemperie en ambientes secos y humedos sin salinidad, con una buena retención del color y brillo.</h4>
            <h4 class="subtit_principal mt-5 home__photo3">Disponibles en presentaciones* de 250 ml, 500 ml, 1 lt, 4 lts, 19 lts, 200 lts. <br>
                                                *Más información sobre colores disponibles al 351 000 0000</h4>
        </div>
        <div class="cont_productos d-flex">
            <div class="row text-center">
                <!-- FILA 01 -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <article class="article_product_cover home__photo4">
                        <img src="Public/images/Pinturas-ducald-OxProtect-110-40.png" alt="Pinturas Ducald OxProtect 110-40">
                        <h6 class="subtit_principal">Ducald OxProtect 110-40</h6>
                        <a class="btn_gen btn_primario" href="#">Consultar Ficha Técnica</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <article class="article_product_cover home__photo5">
                        <img src="Public/images/Pinturas-ducald-OxProtect-Secado-Normal.png" alt="Pinturas Ducald OxProtect Secado Normal">
                        <h6 class="subtit_principal">Ducald OxProtect Secado Normal</h6>
                        <a class="btn_gen btn_primario" href="#">Consultar Ficha Técnica</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <article class="article_product_cover home__photo6">
                        <img src="Public/images/Pinturas-ducald-Extreme-Dry-110-40.png" alt="Pinturas Ducald Extreme Dry 110-40">
                        <h6 class="subtit_principal">Ducald Extreme Dry 110-40</h6>
                        <a class="btn_gen btn_primario" href="#">Consultar Ficha Técnica</a>
                    </article>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <article class="article_product_cover home__photo7">
                        <img src="Public/images/Pinturas-ducald-Extreme-Dry-Secado-Rapido.png" alt="Pinturas Ducald Extreme Dry Secado Rapido">
                        <h6 class="subtit_principal">Ducald Extreme Dry Secado Rapido</h6>
                        <a class="btn_gen btn_primario" href="#">Consultar Ficha Técnica</a>
                    </article>
                </div>
            </div>
        </div>
    </section>


    
    <?php include_once "Public/include/bannerDistribuidor.php"; ?>

    <?php include_once "Public/include/footer.php"; ?>
</body>
</html>