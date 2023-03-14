
    <?php include_once "Public/include/head.php"; ?>
</head>
<body>
    <?php include_once "Public/include/nav.php"; ?>

    <!-- NAVEGACIÓN PRODUCTOS -->
    <nav class="nav_prod">
        <!-- FILA 01 -->
        <ul class="nav_list d-flex">
            <a href="#" class="item_nav">
                <li>VINÍLICA</li>
            </a>
            <a href="#" class="item_nav">
                <li>ESMALTE</li>
            </a>
            <a href="#" class="item_nav">
                <li>ESMALTE</li>
            </a>
            <a href="#" class="item_nav">
                <li>EPÓXICO</li>
            </a>
            <a href="#" class="item_nav">
                <li>SELLADOR POLIVINÍLICO</li>
            </a>
            <a href="#" class="item_nav">
                <li>POLIURETANO</li>
            </a>
            <a href="#" class="item_nav">
                <li>IMPERMEABILIZANTE</li>
            </a>
            <a href="#" class="item_nav">
                <li>TRÁFICO</li>
            </a>
        </ul>
        <!-- FILA 02 -->
        <ul class="nav_list d-flex">
            <a href="#" class="item_nav">
                <li>ALBERCA</li>
            </a>
            <a href="#" class="item_nav">
                <li>FONDO INDUSTRIAL</li>
            </a>
            <a href="#" class="item_nav">
                <li>BARNIZ</li>
            </a>
            <a href="#" class="item_nav">
                <li>PEGAMENTO</li>
            </a>
            <a href="#" class="item_nav">
                <li>PASTA ACRÍLICA</li>
            </a>
            <a href="#" class="item_nav">
                <li>TINTAS</li>
            </a>
            <a href="#" class="item_nav">
                <li>ACCESORIOS</li>
            </a>
        </ul>
    </nav><!-- END -->

    <!-- HEAD PHOTO -->
    <section id="head_product" class="sec_head_product">
        <img class="img-fluid" src="Public/images/Pinturas-ducald-head_productos.jpg" alt="">
    </section>

    <!-- CALCULAR LITROS -->
    <section id="calc_litros" class="sec_litros">
        <div class="cont_encabezado text-center">
            <h2 class="tit_principal">DUCALD es la pintura de inmejorables características.<br>
                Poder cubriente, lavabilidad y resistencia a la intemperie.
            </h2>
            <h4 class="subtit_principal">DUCALD forma una película plástica con excelente satinado que se aplica a superficies de yeso, cemento, concreto, tablaroca, papel, madera, manpostería, entre muchas otras; brinda acabados de calidad, mientras cuida los materiales de la oxidación.</h4>
        </div>
        <div class="container cont_form_litros">
            <h2 class="tit_principal text-center mb-4">¿Cuántos litros necesito?</h2>
            <div class="cont_form_calc">
                <form id="form_litros" class="form_general" action="" method="post">
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
                <img class="img-fluid" src="Public/images/logotipo-balse-terminados.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- BANNER MADERAS -->
    <section id="banner_maderas" class="sec_banner_maderas">
        <div class="container text-center">
            <h2 class="tit_principal mb-4">LA MEJOR SOLUCIÓN PARA MADERAS</h2>
            <p class="txt_general">Hemos invertido toda nuestra experiencia desarrollando productos acrílicos y esmaltes, para crear una línea de terminados para madera, BALSE.</p>
        </div>
    </section>
    
    <!-- DISTRIBUIDOR -->
    <section id="sec_distribuidor" class="sec_gen pleca_divider pleca_white">
        <div class="container text-center">
            <h2 class="tit_principal mb-4">¿QUIERES SER DISTRIBUIDOR?</h2>
            <p class="txt_general">Forma parte de nuestra red de distribución al ofrecer la amplia gama de soluciones con la que cuenta pinturas DUCALD. Contamos con un respaldo de más de 20 años y miles de clientes en varios estados de la República Mexicana.</p>
            <div class="content_btn">
                <a class="btn_gen btn_primario" href="destinos.php">Llévame a Contacto</a>
            </div>
        </div>
    </section>

    <?php include_once "Public/include/footer.php"; ?>
</body>
</html>