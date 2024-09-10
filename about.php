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

    <!-- Carga de estilos de css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- inicio de top bar -->
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
                                    <p>autonew@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Top Bar  -->

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
                    <div class="ml-auto">
                    <a class="btn btn-custom" href="php/cerrar_sesion.php">Cerrar sesión</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Inicio Nav Bar  -->


    <!-- Inicio Page Header  -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Sobre nosotros</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Sobre nosotros</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Page Header  -->


    <!-- Inicio nosotros -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/carousel-4.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>Nosotros</p>
                        <h2>Lavado y detallado de autos</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Somos un establecimiento dedicado a cuidar y mantener tu vehiculo como nuevo, cuidando cada detalle de este mismo.
                        </p>
                        <ul>
                            <li><i class="far fa-check-circle"></i>Lavados de asientos</li>
                            <li><i class="far fa-check-circle"></i>Limpieza con aspiradora</li>
                            <li><i class="far fa-check-circle"></i>Limpieza humeda de exteriores</li>
                            <li><i class="far fa-check-circle"></i>Limpieza de ventanas </li>
                        </ul>
                        <a class="btn btn-custom" href="">Leer mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin nosotros -->


    <!-- inicio datos -->
    <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">4</h3>
                            <p>Puntos de servicio</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-user"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">30 </h3>
                            <p>Trabajadores </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-users"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">1500</h3>
                            <p>Clientes Satisfechos </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fa fa-check"></i>
                        <div class="facts-text">
                            <h3 data-toggle="counter-up">5000</h3>
                            <p>Servicios completados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin datos -->


    <!-- Inicio de equipo -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Nuestro equipo</p>
                <h2>Desarrolladores</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.png" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Duber Forero</h2>
                            <p>Desarrollador back-end </p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.png" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Santiago torres</h2>
                            <p>Desarrollador fron-end</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.png" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Camilo Peralta</h2>
                            <p>Desarrollador back-end</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin equipo -->


    <!-- Inicio de pie de pagina -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <h2>Habla con nosotros</h2>
                        <p><i class="fa fa-map-marker-alt"></i>Torre colpatria piso 14</p>
                        <p><i class="fa fa-phone-alt"></i>3114906440</p>
                        <p><i class="fa fa-envelope"></i>autonew@gmail.com</p>
                        <div class="footer-social">
                            <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Enlaces populares</h2>
                        <a href="about.php">Sobre nosotros </a>
                        <a href="contact.php">Comunicate con nosotros</a>
                        <a href="service.php">Nuestros servicios</a>
                        <a href="location.php">Puntos de servicio</a>
                        <a href="price.php">Precios de los plan</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-link">
                        <h2>Enlaces utiles</h2>
                        <a href="">Terminos de uso </a>
                        <a href="">Politica de privacidad</a>
                        <a href="">Cookies</a>
                        <a href="">Ayuda</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <p>&copy; <a href="#">AUTONEW</a>, Todos los derechos reservados. Diseñado por <a href="colocar link ">Andres forero</a></p>
        </div>
    </div>
    <!-- Fin de pie de pagina -->

    <!-- Boton de regreso -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- JavaScript Librarias -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Contacto Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>