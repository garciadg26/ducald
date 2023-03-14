    <?php include_once "Public/include/head.php"; ?>
<body>
    <?php include_once "Public/include/nav.php" ?>

    <!-- HEAD PHOTO -->
    <section id="head_product" class="sec_head_product">
        <img class="img-fluid" src="Public/images/Pinturas-ducald-head_contacto.jpg" alt="">
    </section>

    <!-- TEXTO DESCRIPTIVO -->
    <section id="sec_blog_encab" class="encab_blog">
        <div class="container">
            <h2 class="tit_principal text-center">EL COLOR QUE NOS UNE</h2>
            <p class="subtit_principal text-center">Contamos con más de 35 años desarrollando pintura y recubrimientos de calidad.</p>
        </div>
    </section>

    <!-- UBICACIÓN Y CONTACTO -->
    <section id="sec_ubicacion" class="ubicacion_contacto">
        <div class="row align-items-center">
            <div class="col-md-4">
                <p class="txt_general">
                    Pinturas Ducald S.A. De C.V. <br>
                    Calle 7 #2 <br>
                    Col. Parque Industrial <br>
                    C.P. 59730 <br>
                    Ecuandureo, Michoacán, México
                </p>
                <h4 class="subtit_principal">ATENCIÓN AL CLIENTE</h4>
                <ul class="list_atencion">
                    <a href="te:3515122297">
                        <li>351 512 22 97
                        </li>
                    </a>
                    <a href="tel:3515157155">
                        <li>351 515 71 55</li>
                    </a>
                    <a href="tel:3515206113">
                        <li>351 520 61 13</li>
                    </a>
                </ul>
            </div>
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.604346154634!2d-102.26706940000001!3d20.1088196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e90121b05c627%3A0x5ee7406638d3bcd1!2sPinturas%20Ducald%20S.A.%20de%20C.V.!5e0!3m2!1ses-419!2smx!4v1678728742169!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- TABULADOR FORMULARIO -->
    <section id="sec_form_navTab" class="tab_form">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="bolsa-tab" data-toggle="tab" data-target="#bolsa" type="button" role="tab" aria-controls="bolsa" aria-selected="true">Bolsa de trabajo</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="distribuidor-tab" data-toggle="tab" data-target="#distribuidor" type="button" role="tab" aria-controls="distribuidor" aria-selected="false">Distribuidor</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="proveedor-tab" data-toggle="tab" data-target="#proveedor" type="button" role="tab" aria-controls="proveedor" aria-selected="false">Proveedor</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="proveedor-tab" data-toggle="tab" data-target="#otros" type="button" role="tab" aria-controls="otros" aria-selected="false">Otros</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- BOLSA DE TRABAJO -->
            <div class="tab-pane fade show active" id="bolsa" role="tabpanel" aria-labelledby="bolsa-tab">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="Public/images/pinturas_ducald_cover_bolsa_trabajo.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <form id="form_bolsa_t" class="form_contacto" action="">
                            <div class="group_input mt-4">
                                <label for="nombreCompINP">Nombre completo</label>
                                <input type="text" name="nombreCompINP" id="nombreCompINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="coreoINP">Correo electrónico</label>
                                <input type="email" name="coreoINP" id="coreoINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="celularINP">Celular</label>
                                <input type="tel" name="celularINP" id="celularINP" placeholder="">
                            </div>
                            <div class="group_input cont_input_radio">
                                <h2>¿Cómo te contactamos?</h2>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Llamada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                              Correo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group_input">
                                <label for="domicilioINP">Domicilio del establecimiento</label>
                                <input type="tel" name="domicilioINP" id="domicilioINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="mensajeINP">Mensaje</label>
                                <textarea name="mensajeINP" id="mensajeINP" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" class="btn_submit" value="ENVIAR">
                        </form>
                    </div>
                </div>
            </div>
            <!-- DISTRIBUIDOR -->
            <div class="tab-pane fade" id="distribuidor" role="tabpanel" aria-labelledby="distribuidor-tab">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="Public/images/pinturas_ducald_cover_distribuidor.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <form id="form_bolsa_t" class="form_contacto" action="">
                            <div class="group_input mt-4">
                                <label for="nombreCompINP">Nombre completo</label>
                                <input type="text" name="nombreCompINP" id="nombreCompINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="coreoINP">Correo electrónico</label>
                                <input type="email" name="coreoINP" id="coreoINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="celularINP">Celular</label>
                                <input type="tel" name="celularINP" id="celularINP" placeholder="">
                            </div>
                            <div class="group_input cont_input_radio">
                                <h2>¿Cómo te contactamos?</h2>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Llamada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                              Correo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group_input">
                                <label for="domicilioINP">Domicilio del establecimiento</label>
                                <input type="tel" name="domicilioINP" id="domicilioINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="mensajeINP">Mensaje</label>
                                <textarea name="mensajeINP" id="mensajeINP" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" class="btn_submit" value="ENVIAR">
                        </form>
                    </div>
                </div>
            </div>
            <!-- PROVEEDOR -->
            <div class="tab-pane fade" id="proveedor" role="tabpanel" aria-labelledby="proveedor-tab">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="Public/images/pinturas_ducald_cover_proveedor.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <form id="form_bolsa_t" class="form_contacto" action="">
                            <div class="group_input mt-4">
                                <label for="nombreCompINP">Nombre completo</label>
                                <input type="text" name="nombreCompINP" id="nombreCompINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="coreoINP">Correo electrónico</label>
                                <input type="email" name="coreoINP" id="coreoINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="celularINP">Celular</label>
                                <input type="tel" name="celularINP" id="celularINP" placeholder="">
                            </div>
                            <div class="group_input cont_input_radio">
                                <h2>¿Cómo te contactamos?</h2>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Llamada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                              Correo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group_input">
                                <label for="domicilioINP">Domicilio del establecimiento</label>
                                <input type="tel" name="domicilioINP" id="domicilioINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="mensajeINP">Mensaje</label>
                                <textarea name="mensajeINP" id="mensajeINP" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" class="btn_submit" value="ENVIAR">
                        </form>
                    </div>
                </div>
            </div>
            <!-- OTROS -->
            <div class="tab-pane fade" id="otros" role="tabpanel" aria-labelledby="otros-tab">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid" src="Public/images/pinturas_ducald_cover_otros.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                        <form id="form_bolsa_t" class="form_contacto" action="">
                            <div class="group_input mt-4">
                                <label for="nombreCompINP">Nombre completo</label>
                                <input type="text" name="nombreCompINP" id="nombreCompINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="coreoINP">Correo electrónico</label>
                                <input type="email" name="coreoINP" id="coreoINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="celularINP">Celular</label>
                                <input type="tel" name="celularINP" id="celularINP" placeholder="">
                            </div>
                            <div class="group_input cont_input_radio">
                                <h2>¿Cómo te contactamos?</h2>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Llamada
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                            <label class="form-check-label" for="flexRadioDefault3">
                                              Correo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group_input">
                                <label for="domicilioINP">Domicilio del establecimiento</label>
                                <input type="tel" name="domicilioINP" id="domicilioINP" placeholder="">
                            </div>
                            <div class="group_input">
                                <label for="mensajeINP">Mensaje</label>
                                <textarea name="mensajeINP" id="mensajeINP" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" class="btn_submit" value="ENVIAR">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PREGUNTAS FRECUENTES -->
    <section id="sec_faqs" class="preguntas_frecuentes text-center">
        <div class="container">
            <h2 class="tit_principal">¿Tienes alguna duda?</h2> 
            <p class="txt_general">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, impedit repellat itaque ducimus cumque aspernatur placeat quaerat assumenda soluta ullam quo earum iure, fugit ab distinctio odio nemo voluptatem pariatur.</p>
            <a class="btn_gen btn_primario" href="faqs.html">Llévame a Preguntas Frecuentes</a>
        </div>
    </section>

    <?php include_once "Public/include/footer.php"; ?>


</body>
</html>