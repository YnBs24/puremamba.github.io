<?php

require_once("VIEW/TEMPLATES/head.php");
?>

<div class="context-dark">
    <!-- Modern Breadcrumbs-->
    <section>
        <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/background-04-1920x750.jpg">
            <div class="parallax-content">
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">
                    <h2 class="d-none d-lg-block offset-top-30"><span class="big">Contáctanos</span></h2>
                </div>
            </div>
        </div>
    </section>
</div>
</header>


<section class="section-110 text-xl-left novi-background" data-preset='{"title":"Contact form","category":"content, form","reload":true,"id":"form"}'>
    <div class="container">
        <div class="row justify-content-sm-center justify-content-sm-center">
            <div class="col-xl-4">
                <div class="inset-xl-right-80">
                    <h3 class="font-weight-bold">¿Cómo encontrarnos?</h3>
                    <hr class="divider hr-xl-left-0 bg-red">
                    <p class="offset-top-41 offset-xl-top-50">Nos encontramos en una ubicación accesible y fácil de encontrar. Utiliza el mapa para llegar rápidamente a nuestras instalaciones y comenzar tu entrenamiento o comprar nuestras prendas.</p>
                    <address class="contact-info offset-top-30 offset-xl-top-50">
                        <div class="h6 text-uppercase font-weight-bold text-danger letter-space-none offset-top-none">Puré Mamba</div>
                        <p>Bx GYM
                            Estado de México, México</p>
                        <dl class="offset-top-0">
                            <dt>Teléfono</dt>
                            <dd><a href="tel:#">+5578768678</a></dd>
                        </dl>
                        <dl>
                            <dt>E-mail:</dt>
                            <dd><a href="mailto:#">puremamba@gmail.com</a></dd>
                        </dl>
                    </address>
                    <address class="contact-info offset-top-30 offset-xl-top-50">
                        <div class="h6 text-uppercase font-weight-bold text-danger letter-space-none">Horario</div>
                        <p>Lunes a Viernes: 6:00 AM - 10:00 PM
                            Sábados y Domingos: 8:00 AM - 4:00 PM</p>
                    </address>
                </div>
            </div>
            <div class="col-md-8 offset-top-66 offset-xl-top-0">
                <h3 class="font-weight-bold">¿Tienes alguna duda o sugerencia? Escríbrenos</h3>
                <hr class="divider hr-xl-left-0 bg-red">
                <!-- RD Mailform-->
                <form class="rd-mailform text-left offset-top-50" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row novi-excluded">
                        <div class="col-xl-6">
                            <div class="form-group">
                                <label class="form-label form-label-outside" for="contact-us-name">Nombre:</label>
                                <input class="form-control" id="contact-us-name" type="text" name="name" data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-xl-6 offset-top-20 offset-xl-top-0">
                            <div class="form-group">
                                <label class="form-label form-label-outside" for="contact-us-email">E-Mail:</label>
                                <input class="form-control" id="contact-us-email" type="email" name="email" data-constraints="@Required @Email">
                            </div>
                        </div>
                        <div class="col-xl-12 offset-top-20">
                            <div class="form-group">
                                <label class="form-label form-label-outside" for="contact-us-message">Mensaje:</label>
                                <textarea class="form-control" id="contact-us-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="group-sm text-center text-xl-left offset-top-30">
                        <button class="btn btn-danger" type="submit">Enviar</button>
                        <button class="btn btn-default" type="reset">Borrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section data-preset='{"title":"Map","category":"content, map","reload":true,"id":"map"}'>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6740902192714!2d-98.97490222463556!3d19.42648264087591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e32c98e4e2e5%3A0xee48e6fdb375b65f!2sBx%20GYM.!5e0!3m2!1ses!2smx!4v1781386189998!5m2!1ses!2smx"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>



<?php require_once('VIEW/TEMPLATES/footer.php') ?>