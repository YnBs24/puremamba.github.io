<?php

require_once("VIEW/TEMPLATES/head.php");
?>

<div class="context-dark">
    <!-- Modern Breadcrumbs-->
    <section>
        <div class="parallax-container breadcrumb-modern bg-gray-darkest" data-parallax-img="images/background-04-1920x750.jpg">
            <div class="parallax-content">
                <div class="container section-top-98 section-bottom-34 section-lg-bottom-66 section-lg-98 section-xl-top-110 section-xl-bottom-41">

                </div>
            </div>
        </div>
    </section>
</div>
</header>

<section class="section-60 section-md-90">
    <div class="container">

        <div class="row">

            <!-- IMAGEN -->
            <div class="col-md-6 offset-top-30">
                <img src="RESOURCES/ejemplo.jpg" alt="Pure Mamba" width="100%">
            </div>

            <!-- FORMULARIO -->
            <div class="col-md-6 offset-top-30">

                <!-- LOGIN -->
                <div id="loginBox">

                    <h2 class="text-center">Iniciar Sesión</h2>

                    <!-- GOOGLE LOGIN -->
                    <button class="btn btn-light btn-block offset-top-20">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                             width="18" style="margin-right:8px;">
                        Continuar con Google
                    </button>

                    <hr>

                    <input type="email" class="form-control offset-top-15" placeholder="Correo electrónico">
                    <input type="password" class="form-control offset-top-15" placeholder="Contraseña">

                    <button class="btn btn-danger btn-block offset-top-20">
                        Iniciar sesión
                    </button>

                    <p class="text-center offset-top-20">
                        ¿No tienes cuenta?
                        <a href="#" onclick="showRegister(); return false;">Registrarse</a>
                    </p>

                </div>

                <!-- REGISTRO -->
                <div id="registerBox" style="display:none;">

                    <h2 class="text-center">Crear cuenta</h2>

                    <!-- GOOGLE REGISTER -->
                    <button class="btn btn-light btn-block offset-top-20">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg"
                             width="18" style="margin-right:8px;">
                        Registrarse con Google
                    </button>

                    <hr>

                    <input type="text" class="form-control offset-top-15" placeholder="Nombre">
                    <input type="email" class="form-control offset-top-15" placeholder="Correo electrónico">
                    <input type="password" class="form-control offset-top-15" placeholder="Contraseña">

                    <button class="btn btn-dark btn-block offset-top-20">
                        Registrarse
                    </button>

                    <p class="text-center offset-top-20">
                        ¿Ya tienes cuenta?
                        <a href="#" onclick="showLogin(); return false;">Iniciar sesión</a>
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>



<script>
    function showRegister() {
        document.getElementById("loginBox").style.display = "none";
        document.getElementById("registerBox").style.display = "block";
    }

    function showLogin() {
        document.getElementById("registerBox").style.display = "none";
        document.getElementById("loginBox").style.display = "block";
    }
</script>
<?php require_once('VIEW/TEMPLATES/footer.php') ?>