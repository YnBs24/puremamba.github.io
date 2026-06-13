<?php

    require_once("VIEW/TEMPLATES/head.php");
?>

        <!--Swiper-->
            <div class="swiper-container swiper-slider" data-loop="false" data-autoplay="5500" data-dragable="false">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide" data-slide-bg="RESOURCES/background-02-1920x750.jpg"
                        data-preview-bg="RESOURCES/background-02-1920x750.jpg">
                        <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                            <div class="swiper-slide-caption">
                                <div class="container">
                                    <div class="row justify-content-xl-center">
                                        <div class="col-xl-12">
                                            <div class="text-extra-big font-weight-bold font-italic text-uppercase"
                                                data-caption-animate="fadeInUp" data-caption-delay="300">Puré Mamba</div>
                                        </div>
                                        <div class="col-xl-8 offset-top-10">
                                            <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                                               Entrena duro, entrena sin límites
                                            </h5>
                                            <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="comprar.php"
                                                    data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span
                                                        class="btn-text">Comprar</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="RESOURCES/background-01-1920x750.png"
                        data-preview-bg="RESOURCES/background-01-1920x750.png">
                        <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                            <div class="swiper-slide-caption">
                                <div class="container">
                                    <div class="row justify-content-xl-center">
                                        <div class="col-xl-12">
                                            <div class="text-extra-big font-weight-bold font-italic text-uppercase"
                                                data-caption-animate="fadeInUp" data-caption-delay="300">Diseñado para rendir</div>
                                        </div>
                                        <div class="col-xl-8 offset-top-10">
                                            <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                                                Comodidad que se mueve contigo</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="RESOURCES/background-03-1920x750.jpg"
                        data-preview-bg="RESOURCES/background-03-1920x750.jpg">
                        <div class="swiper-caption swiper-parallax" data-speed="0.5" data-fade="true">
                            <div class="swiper-slide-caption">
                                <div class="container">
                                    <div class="row justify-content-xl-center">
                                        <div class="col-xl-12">
                                            <div class="text-extra-big font-weight-bold font-italic text-uppercase"
                                                data-caption-animate="fadeInUp" data-caption-delay="300">Cada repetición cuenta</div>
                                        </div>
                                        <div class="col-xl-8 offset-top-10">
                                            <h5 class="hidden d-sm-block text-light" data-caption-animate="fadeInUp" data-caption-delay="500">
                                                Vístete para superarte</h5>
                                            <!-- <div class="offset-top-20 offset-sm-top-50"><a class="btn btn-danger btn-anis-effect" href="#"
                                                    data-waypoint-to="#welcome" data-caption-animate="fadeInUp" data-caption-delay="800"><span
                                                        class="btn-text">get started</span></a></div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button swiper-button-prev swiper-parallax mdi mdi-chevron-left"></div>
                <div class="swiper-button swiper-button-next swiper-parallax mdi mdi-chevron-right"></div>
                <div class="swiper-pagination"></div>
            </div>
        </header>
        
        <!--Bienvenido-->
        <section class="section-98 section-md-110 novi-background"
            data-preset='{"title":"Content block 1","category":"content","id":"content-block-1"}'>
            <div class="container">
                <h1>Bienvenido</h1>
                <hr class="divider bg-red">
                <div class="row justify-content-sm-center offset-top-66">
                    <div class="col-xl-8">
                        <p>Bienvenido a Puré Mamba! Somos una marca 100% mexicana, que busca dar prendas de otro nivel,
                            que no solo el pre te aloque, TAMBIEN TU ROPA 
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center grid-group-lg offset-top-98">
                    <div class="col-md-8 col-lg-4">
                        <!-- Icon Box Type 5-->
                        <div class="box-icon box-icon-bordered"><span
                                class="novi-icon icon icon-outlined icon-xs icon-dark-filled mdi mdi-thumb-up"></span>
                            <h4 class="text-danger offset-top-20">Suavidad y comodidad</h4>
                            <p>Todas nuestras prendas son fuertemente comodas.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-4">
                        <!-- Icon Box Type 5-->
                        <div class="box-icon box-icon-bordered"><span
                                class="novi-icon icon icon-outlined icon-sm icon-dark-filled mdi mdi-dumbbell"></span>
                            <h4 class="text-danger offset-top-20">Entrena con estilo</h4>
                            <p>Nuestros modelos son pensados para crear un impacto entre el gimnasio como estilo de vida</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Offers-->
        <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
            <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="2"
                data-sm-items="2" data-lg-items="2" data-xl-items="2" data-nav="true" data-dots="true"
                data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                <div>
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="comprar.php"><img width="480" height="480" src="RESOURCES/pants.jpg"
                                alt="" /></a>
                        <figcaption>
                            <div>
                                <h4 class="thumbnail-terry-title">Pants</h4>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger"
                                href="comprar.php">Ver</a>
                        </figcaption>
                    </figure>
                </div>

                <div>
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="comprar.php"><img width="480" height="480" src="RESOURCES/shorts.jpg"
                                alt="" /></a>
                        <figcaption>
                            <div>
                                <h4 class="thumbnail-terry-title">Shorts</h4>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger"
                                href="comprar.php">Ver</a>
                        </figcaption>
                    </figure>
                </div>
                
            </div>
        </section>



        <section data-preset='{"title":"Carousel 1","category":"content, carousel","reload":true,"id":"carousel-1"}'>
            <div class="owl-carousel owl-carousel-default d-lg-none-owl-dots veil-owl-nav d-lg-owl-nav" data-items="2"
                data-sm-items="2" data-lg-items="2" data-xl-items="2" data-nav="true" data-dots="true"
                data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">

                <div>
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="comprar.php"><img width="480" height="480" src="RESOURCES/playeras.jpg"
                                alt="" /></a>
                        <figcaption>
                            <div>
                                <h4 class="thumbnail-terry-title">Playeras Oversize</h4>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger"
                                href="comprar.php">Ver</a>
                        </figcaption>
                    </figure>
                </div>
                <div>
                    <!-- Thumbnail Terry-->
                    <figure class="thumbnail-terry"><a href="comprar.php"><img width="480" height="480" src="RESOURCES/suaderas.jpg"
                                alt="" /></a>
                        <figcaption>
                            <div>
                                <h4 class="thumbnail-terry-title">Suaderas</h4>
                            </div>
                            <p class="thumbnail-terry-desc offset-top-0"></p><a class="btn offset-top-10 offset-lg-top-0 btn-danger"
                                href="comprar.php">Ver</a>
                        </figcaption>
                    </figure>
                </div>
                
            </div>
        </section>


        <br>
<?php require_once('VIEW/TEMPLATES/footer.php') ?>