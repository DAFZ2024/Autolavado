<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Porfavor debes iniciar session");
                window.location = "login.php";
            </script>
        ';
        session_destroy();
        die();

    }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Autonew - lavado de autos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Librarias -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Carga de estilos css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="principal.php">
                            <img src="img/logo.png" alt="logo" align="left">
                            <p> </p>
                            <h1>Auto<span>New</span></h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Hora de apertura</h3>
                                    <p>Lunes - Domingo, 8:00 am - 6:00 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Telefono</h3>
                                    <p>3114996440</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Gmail</h3>
                                    <p>aotunew@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio Top Bar  -->

    <!-- Inicio Nav Bar  -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="principal.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">Nosotros</a>
                        <a href="service.php" class="nav-item nav-link">Servicios</a>
                        <a href="price.php" class="nav-item nav-link">Precios</a>
                        <a href="location.php" class="nav-item nav-link">Puntos de lavados</a>
                        <a href="contact.php" class="nav-item nav-link">Contacto</a>
                    </div>

                </div>
                <div class="ml-auto">
                <a class="btn btn-custom" href="php/cerrar_sesion.php">Cerrar sesión</a>
                </div>
        </div>
        </nav>
    </div>
    </div>
    <!-- Inicio Nav Bar -->


    <!-- Inicio Page Header  -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Habla con nosotros</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contactanos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Page Header  -->


    <!-- Inicio de contacto -->
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
                <p>Ponte en contacto </p>
                <h2>Contacto para cualquier consulta </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <h2>Informacion de contacto rapido</h2>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Hora de apertura</h3>
                                <p>Lunes - Viernes, 8:00 am - 4:00 pm </p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Llamanos </h3>
                                <p>3114996440</p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="contact-info-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h3>Email</h3>
                                <p>autonew@gmailcom</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="https://formsubmit.co/du28fo@gmail.com" method="POST">
                            <div class="control-group ">
                                <input type="text " class="form-control " name="name" id="name " placeholder="Tu nombre " required="required " data-validation-required-message="Por favor ingresa su nombre " />
                                <p class="help-block text-danger "></p>
                            </div>
                            <div class="control-group ">
                                <input type="email " class="form-control " name="email" id="email " placeholder="Tu correo " required="required " data-validation-required-message="Por favor ingresa su correo " />
                                <p class="help-block text-danger "></p>
                            </div>
                            <div class="control-group ">
                                <input type="text " class="form-control " name="subject" id="subject " placeholder="Asunto " required="required " data-validation-required-message="Por favor ingresa el asunto " />
                                <p class="help-block text-danger "></p>
                            </div>
                            <div class="control-group ">
                                <textarea class="form-control " name="comments" id="comments " placeholder="Mensaje " required="required " data-validation-required-message="Por favor ingresa el mensaje "></textarea>
                                <p class="help-block text-danger "></p>
                            </div>
                    </div>
                    <button class="btn btn-custom " type="submit " id="sendMessageButton ">Enviar mensaje</button>
                    <input type="hidden" name="_next" value="http://localhost/login-register/contact.php">
                    <input type="hidden" name="_captcha" value="false">
                    </form>
                </div>
            </div>
            <div class="col-md-12 ">
                <iframe style="border-radius: 20px; box-shadow: 0 0 100px rgba(0, 0, 0, 0.5); "src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31816.581663186567!2d-74.2064128!3d4.580966399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1725023364696!5m2!1ses-419!2sco " width="600
                            " height="450 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
            </div>
        </div>
    </div>
    </div>
    <!-- FIn de contacto -->


    <!-- Inicio de pie de pagina -->
    <div class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-3 col-md-6 ">
                    <div class="footer-contact ">
                        <h2>Habla con nosotros</h2>
                        <p><i class="fa fa-map-marker-alt "></i>Torre colpatria piso 14</p>
                        <p><i class="fa fa-phone-alt "></i>3114906440</p>
                        <p><i class="fa fa-envelope "></i>autonew@gmail.com</p>
                        <div class="footer-social ">
                            <a class="btn " href=" "><i class="fab fa-twitter "></i></a>
                            <a class="btn " href=" "><i class="fab fa-facebook-f "></i></a>
                            <a class="btn " href=" "><i class="fab fa-youtube "></i></a>
                            <a class="btn " href=" "><i class="fab fa-instagram "></i></a>
                            <a class="btn " href=" "><i class="fab fa-linkedin-in "></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="footer-link ">
                        <h2>Enlaces populares</h2>
                        <a href="about.php">Sobre nosotros </a>
                        <a href="contact.php">Comunicate con nosotros</a>
                        <a href="service.php">Nuestros servicios</a>
                        <a href="location.php">Puntos de servicio</a>
                        <a href="price.php">Precios de los plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="footer-link ">
                        <h2>Enlaces utiles</h2>
                        <a href=" ">Terminos de uso </a>
                        <a href=" ">Politica de privacidad</a>
                        <a href=" ">Cookies</a>
                        <a href=" ">Ayuda</a>
                        <a href=" ">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright ">
            <p>&copy; <a href="# ">AUTONEW</a>, Todos los derechos reservados. Diseñado por <a href="colocar link ">Andres forero</a></p>
        </div>
    </div>
    <!-- Fin de pie de pagina -->

    <!-- Boton de regreso -->
    <a href="# " class="back-to-top "><i class="fa fa-chevron-up "></i></a>

    <!-- Pre Loader -->
    <div id="loader " class="show ">
        <div class="loader "></div>
    </div>

    <!-- JavaScript Librarias -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js "></script>
    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>
    <script src="lib/waypoints/waypoints.min.js "></script>
    <script src="lib/counterup/counterup.min.js "></script>

    <!-- Contacto Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js "></script>
    <script src="mail/contact.js "></script>

    <!-- Template Javascript -->
    <script src="js/main.js "></script>
</body>

</html>