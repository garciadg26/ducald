
    <?php 
        $title = "Pinturas DUCALD | Sitio oficial";
        $description = "Fabricamos pinturas y productos de calidad a un precio justo, logrando satisfacer las necesidades de todos y cada uno de nuestros clientes.";
    ?>
    
    <?php include_once "Public/include/head.php"; ?>
<body>
    <?php include_once "Public/include/loader.php" ?>
    <!-- <div class="loader" style="position: fixed; width: 100%; height: 100%; z-index: 10000; background: #28256B">
    	<div id="build" style="width: 250px; height: 100px; position: fixed; margin: auto; top: 0; bottom: 0; left: 0; right: 0;"></div>
    </div>
    <script src="json/lottie.js?ver=1.1.10" type="text/javascript"></script>
    <script src="json/load.js?ver=1.1.10" type="text/javascript"></script> -->

    <?php include_once "Public/include/nav.php"; ?>

<!-- VERSIÓN DESKTOP -->
<div class="v_desktop">
    <!-- DUCALT MEJOR OPCIÓN -->
    <section id="sec_ducald_01" class="sec_general">
        <div class="">
            <button onclick="location.href='ducald.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><span>DUCALD ES TU MEJOR OPCIÓN</span></button>
        </div>
    </section>
    <!-- PRODUCTOS -->
    <section id="sec_ducald_02" class="sec_general">
        <button onclick="location.href='productos.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>PRODUCTOS</span></button>
    </section>
    <!-- NOSOTROS -->
    <section id="sec_ducald_03" class="sec_general">
        <button onclick="location.href='nosotros.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>NOSOTROS</span></button>
    </section>
    <!-- BLOG -->
    <section id="sec_ducald_04" class="sec_general">
        <button onclick="location.href='blog.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>BLOG</span></button>
    </section>
    <!-- FACTURACIÓN -->
    <section id="sec_ducald_05" class="sec_general">
        <button class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>FACTURACIÓN</span></button>
    </section>
    <!-- CONTACTO -->
    <section id="sec_ducald_06" class="sec_general">
        <button onclick="location.href='contacto.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>CONTACTO</span></button>
    </section>
</div>
<!-- FIN DESKTOP -->

<!-- VERSIÓN MÓVIL -->
<div class="v_movil">
    <!-- DUCALT MEJOR OPCIÓN -->
    <section id="sec_ducald_01" class="sec_general paralex">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-tu-mejor-opcion.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button onclick="location.href='ducald.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><span>DUCALD ES TU MEJOR OPCIÓN</span></button>
        </div>
    </section>
    <div class="not-paralex"></div>
    <!-- PRODUCTOS -->
    <section id="sec_ducald_02" class="sec_general paralex half slow">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-productos.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button onclick="location.href='productos.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>PRODUCTOS</span></button>
        </div>
    </section>
    <div class="not-paralex"></div>
    <!-- NOSOTROS -->
    <section id="sec_ducald_03" class="sec_general paralex fast">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-nosotros.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button onclick="location.href='nosotros.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>NOSOTROS</span></button>
        </div>
    </section>
    <div class="not-paralex"></div>
    <!-- BLOG -->
    <section id="sec_ducald_04" class="sec_general paralex">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-blog.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button onclick="location.href='blog.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>BLOG</span></button>
        </div>
    </section>
    <div class="not-paralex"></div>
    <!-- FACTURACIÓN -->
    <section id="sec_ducald_05" class="sec_general paralex half slow">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-facturacion.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>FACTURACIÓN</span></button>
        </div>
    </section>
    <div class="not-paralex"></div>
    <!-- CONTACTO -->
    <section id="sec_ducald_06" class="sec_general paralex">
        <div class="background" style="
  background: url('Public/images/Pinturas-ducald-contacto.jpg');
  background-position-x: 50%;
  background-position-y: 50%;
  opacity: 1;">
        </div>
        <div class="foreground">
            <button onclick="location.href='contacto.php'" class="tit_link link_slide button button--telesto wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s"><span>CONTACTO</span></button>
        </div>
    </section>
</div>
<!-- FIN MÓVIL -->


    <?php include_once "Public/include/footer.php"; ?>
    <script type="text/javascript" src="Public/js/wow.min.js"></script>
    <script type="text/javascript">
        var wow = new WOW(
        {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
            callback:     function(box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
            },
            scrollContainer: null // optional scroll container selector, otherwise use window
        }
    );
    wow.init();
    </script>
    <!-- PARALLAX -->
    <script type="text/javascript" src="Public/js/paralex.js?ver=1.1.12"></script>
    <script type="text/javascript" src="Public/js/parallaxScroll.js?ver=1.1.11"></script>
</body>
</html>
