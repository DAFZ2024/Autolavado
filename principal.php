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

    <!-- Estilo de plantilla -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css\stylesimg.css">

</head>

<body>
    <!-- Inicio top Bar  -->
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
                                    <p>Lunes - Domingo, 8:00 am - 5:00 pm</p>
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
                                    <p>Autonew@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin top Bar  -->

    <!-- Inicio nav Bar  -->
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
    <!-- Fin Nav Bar  -->


    <!-- Inicio Carousel  -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Lavado y Detallado</h3>
                        <h1>Manten tu auto como nuevo</h1>
                        <p>
                            Hacemos que la diferencia se note al salir ¡Artistas del lavado!
                        </p>
                        <a class="btn btn-custom" href="empresa.html">Ver mas</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Lavado y Detallado</h3>
                        <h1>Un servicio de calidad para ti</h1>
                        <p>
                            Damos lo mejor para que vivas una y otra vez una nueva experiencia con nuestro servicio.
                        </p>
                        <a class="btn btn-custom" href="empresa.html">Ver mas</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Lavado y Deatallado </h3>
                        <h1>Exterior e interior limpios </h1>
                        <p>
                            Desde el interior hasta el exterior sacudimos la suciedad para apuntarnos al cuidado de tu vehículo.
                        </p>
                        <a class="btn btn-custom" href="empresa.html">Ver mas</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-4.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Lavado y Deatallado </h3>
                        <h1>Exterior e interior limpios </h1>
                        <p>
                            Desde el interior hasta el exterior sacudimos la suciedad para apuntarnos al cuidado de tu vehículo.
                        </p>
                        <a class="btn btn-custom" href="empresa.html">Ver mas</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/carousel-5.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3>Lavado y Deatallado </h3>
                        <h1>Exterior e interior limpios </h1>
                        <p>
                            Desde el interior hasta el exterior sacudimos la suciedad para apuntarnos al cuidado de tu vehículo.
                        </p>
                        <a class="btn btn-custom" href="empresa.html">Ver mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Carousel  -->


    <!--  Inicio Nosotros  -->
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
                        <a class="btn btn-custom" href="empresa.html">Leer mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Nosotros  -->


    <!-- Inicio  servicio -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>¿Que Hacemos?</p>
                <h2>Servicio de lavado premiun</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash-1"></i>
                        <h3>Lavado de exteriores </h3>
                        <p>Ofrecemos una limpieza superior sin generar daños en tu vehiculo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash"></i>
                        <h3>Lavado de interiores </h3>
                        <p>Cuidamos cada paso para cuidar al maximo el interior de tu vehiculo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-vacuum-cleaner"></i>
                        <h3>Limpieza con aspiradora</h3>
                        <p>Cuidamos las partes mas delicadas de tu vehiculo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-seat"></i>
                        <h3>Lavado de asientos</h3>
                        <p>Cuidamos los materiales de la cogineria de tu vehiculo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service"></i>
                        <h3>Limpieza de ventanas</h3>
                        <p>Limpiamos dejando tus ventanas relucientes sin ningun rasguño.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-service-2"></i>
                        <h3>Limpieza humeda</h3>
                        <p>Realizamos la limpieza con materias de maxima calidad que ofrecen un cuidado total a las superficies de tu vehiculo.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-car-wash"></i>
                        <h3>Cambio de aceite</h3>
                        <p>Evitamos que tu motor sufra desgastes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <i class="flaticon-brush-1"></i>
                        <h3>Reparacion de frenos</h3>
                        <p>Cambiamos las pastillas de tus frenos para mantener tu seguridad y la de tus seres queridos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin servicio -->


    <!-- Inicio datos -->
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


    <!-- inicio planes -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Planes de lavado</p>
                <h2>Escoge tu plan</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Lavado basico</h3>
                            <h2><span>$</span><strong>69</strong><span>.999</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Acceso al servicio 2 veces por mes</li>
                                <li><i class="far fa-check-circle"></i>Lavado de asientos</li>
                                <li><i class="far fa-check-circle"></i>Limpieza con aspiradora </li>
                                <li><i class="far fa-check-circle"></i>Lavado de exteriores</li>
                                <li><i class="far fa-times-circle"></i>Lavado humedo de interiores</li>
                                <li><i class="far fa-times-circle"></i>Limpieza de ventanas</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <form id="payment-form" method="POST" action="https://gateway.payulatam.com/ppp-web-gateway/">
                                <input type="hidden" name="merchantId" value="tu_merchant_id">
                                <input type="hidden" name="accountId" value="tu_account_id">
                                <input type="hidden" name="description" value="Descripción del producto">
                                <input type="hidden" name="amount" value="69.999">
                                <!-- Monto en COP -->
                                <input type="hidden" name="currency" value="COP">
                                <input type="hidden" name="test" value="1">
                                <!-- 1 para pruebas, 0 para producción -->
                                <input type="hidden" name="returnUrl" value="price.html">
                                <input type="hidden" name="signature" value="firma_generada">
                                <button type="submit" class="btn btn-custom">Comprar ahora</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item featured-item">
                        <div class="price-header">
                            <h3>Limpieza premiun</h3>
                            <h2><span>$</span><strong>99</strong><span>.999</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Acceso al servicio 2 veces por mes</li>
                                <li><i class="far fa-check-circle"></i>Lavado de asientos</li>
                                <li><i class="far fa-check-circle"></i>Limpieza con aspiradora</li>
                                <li><i class="far fa-check-circle"></i>Lavado de exteriores</li>
                                <li><i class="far fa-check-circle"></i>Lavado humedo de interiores</li>
                                <li><i class="far fa-times-circle"></i>Limpieza de ventanas</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <form id="payment-form" method="POST" action="https://gateway.payulatam.com/ppp-web-gateway/">
                                <input type="hidden" name="merchantId" value="tu_merchant_id">
                                <input type="hidden" name="accountId" value="tu_account_id">
                                <input type="hidden" name="description" value="Descripción del producto">
                                <input type="hidden" name="amount" value="99.999">
                                <!-- Monto en COP -->
                                <input type="hidden" name="currency" value="COP">
                                <input type="hidden" name="test" value="1">
                                <!-- 1 para pruebas, 0 para producción -->
                                <input type="hidden" name="returnUrl" value="price.html">
                                <input type="hidden" name="signature" value="firma_generada">
                                <button type="submit" class="btn btn-custom">Comprar ahora</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-item">
                        <div class="price-header">
                            <h3>Limpieza completa </h3>
                            <h2><span>$</span><strong>139</strong><span>.999</span></h2>
                        </div>
                        <div class="price-body">
                            <ul>
                                <li><i class="far fa-check-circle"></i>Acceso al servicio 2 veces por mes</li>
                                <li><i class="far fa-check-circle"></i>Lavado de asientos </li>
                                <li><i class="far fa-check-circle"></i>Limpieza con aspiradora</li>
                                <li><i class="far fa-check-circle"></i>Lavado de exteriores</li>
                                <li><i class="far fa-check-circle"></i>Lavado humedo de interiores</li>
                                <li><i class="far fa-check-circle"></i>Limpieza de ventanas</li>
                            </ul>
                        </div>
                        <div class="price-footer">
                            <form id="payment-form" method="POST" action="https://gateway.payulatam.com/ppp-web-gateway/">
                                <input type="hidden" name="merchantId" value="tu_merchant_id">
                                <input type="hidden" name="accountId" value="tu_account_id">
                                <input type="hidden" name="description" value="Descripción del producto">
                                <input type="hidden" name="amount" value="139.999">
                                <!-- Monto en COP -->
                                <input type="hidden" name="currency" value="COP">
                                <input type="hidden" name="test" value="1">
                                <!-- 1 para pruebas, 0 para producción -->
                                <input type="hidden" name="returnUrl" value="price.html">
                                <input type="hidden" name="signature" value="firma_generada">
                                <button type="submit" class="btn btn-custom">Comprar ahora</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin planes -->


    <!-- Inicio puntos lavado -->
    <div class="location">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-header text-left">
                        <p>Puntos de lavado</p>
                        <h2>Puntos de Mantenimiento y lavado de autos </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>San mateo</h3>
                                    <p>Cl. 25 #3-119 a 3-113</p>
                                    <p><strong>Telefono:</strong>3145789064</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>El altico </h3>
                                    <p>Autopista Sur #5-78</p>
                                    <p><strong>Telefono:</strong>3116908480</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Madelena</h3>
                                    <p>Cl. 45a Sur #52-93</p>
                                    <p><strong>Telefono:</strong>3208809430</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="location-item">
                                <i class="fa fa-map-marker-alt"></i>
                                <div class="location-text">
                                    <h3>Toberin</h3>
                                    <p>Cl. 164 #23-2 a 23-70</p>
                                    <p><strong>Telefono:</strong>3106844039</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                    <div class="location-form">
                    <h3> Reserva tu cita </h3>
                        <form action="php\reservar_cita.php" method="POST">

                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="telephone" class="form-control" placeholder="Telefono" name="telefono" id="telefhone" required="required" />
                            </div>

                            <fieldset class="fieldset">

                            <legend class="legend">Tipo de lavado :</legend>
            
                            <label class="labelform">
                            <input type="radio" name="tipo_servicio" value="Lavado basico" required>
                            Lavado basico
                            </label>
                            <br>
            
                            <label class="labelform">
                            <input type="radio" name="tipo_servicio" value="Limpieza premiun" required>
                            Limpieza premiun
                            </label>
                            <br>

                            <label class="labelform">
                            <input type="radio" name="tipo_servicio" value="Limpieza completa" required>
                            Limpieza completo
                            </label>
                            <br>

                            </fieldset>

                            <fieldset>
                            <legend class="legend">Selecciona el lugar :</legend>
            
                            <label class="labelform">
                            <input type="radio" name="opcion_lugar" value="San mateo" required>
                            San mateo
                            </label>
                            <br>
            
                            <label class="labelform">
                            <input type="radio" name="opcion_lugar" value="El altico" required>
                            El altico
                            </label>
                            <br>
                            </fieldset>

                            <div style="margin-bottom: 15px;">
                            <label style=" display: block;
                                            margin-bottom: 10px;
                                            font-size: 18px;
                                            color: #ecf0f1;" for="fecha">Selecciona una fecha:</label>
                            <input style="width: 100%;
                                            padding: 10px;
                                            border: 2px solid #1abc9c;
                                            border-radius: 5px;
                                            font-size: 16px;
                                            color: #2c3e50;
                                            background-color: #ecf0f1;
                                            box-sizing: border-box; 
                                            transition: border-color 0.3s, box-shadow 0.3s; "
                                            type="date" id="fecha" name="fecha" required="required">
                            </div>

                            <div style="margin-bottom: 15px;">
                            <label  style="display: block;
                                            margin-bottom: 10px;
                                            font-size: 18px;
                                            color: #ecf0f1;" for="hora">Selecciona una hora:</label>
                            <select style="margin-bottom: 15px;
                                            max-width: 400px;
                                            margin: 0 auto; 
                                            padding: 20px;
                                            background-color:#ecf0f1; 
                                            border-radius: 8px;
                                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);" id="hora" name="hora" required>
                            </select>
                            <br>
                            </div>
                            <button class="btn btn-custom" type="submit">Enviar solicitud </button>
                        </form>

                        <script>
                                // Función para generar las opciones de tiempo
                                function generarOpcionesDeHora(minHora, maxHora) {
                                const select = document.getElementById('hora');
                                const interval = 60; // Intervalo en minutos entre opciones
            
                                let horaActual = new Date('1970-01-01T' + minHora + ':00');
                                const horaFinal = new Date('1970-01-01T' + maxHora + ':00');

                                while (horaActual <= horaFinal) {
                                        const horas = horaActual.getHours().toString().padStart(2, '0');
                                        const minutos = horaActual.getMinutes().toString().padStart(2, '0');
                                        const valor = `${horas}:${minutos}`;
                
                                // Crear una opción y añadirla al <select>
                                        const opcion = document.createElement('option');
                                        opcion.value = valor;
                                        opcion.textContent = valor;
                                        select.appendChild(opcion);
                
                                // Incrementar la hora actual por el intervalo
                                        horaActual = new Date(horaActual.getTime() + interval * 60000);
                                    }
                                }
        
                              // Llamar a la función con el rango deseado
                            generarOpcionesDeHora('09:00', '14:00');
    </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- fin puntos lavados  -->


    <!-- Inicio de equipos  -->
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
    <!-- Fin equipo -->


    <!-- Inicio de testimonios -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Comentarios</p>
                <h2>Que piensan nuestros clientes</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="img/testimonial-1.png" alt="Image">
                    <div class="testimonial-text">
                        <h3>Mariana pinzon</h3>
                        <h4>Profesor</h4>
                        <p>
                            Desde que compre mi suscripcion en autonew ya no me preocupo por hacer filas a la hora de lavar mi auto.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-2.png" alt="Image">
                    <div class="testimonial-text">
                        <h3>Maria fernandez</h3>
                        <h4>Ingeniera</h4>
                        <p>
                            Son los mejores en lo que hacen.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-3.png" alt="Image">
                    <div class="testimonial-text">
                        <h3>Karen carmona</h3>
                        <h4>Arquitecto</h4>
                        <p>
                            La atencion es muy buena y los resultados estupendos.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="img/testimonial-4.png" alt="Image">
                    <div class="testimonial-text">
                        <h3>Juan alvarez</h3>
                        <h4>Consejal</h4>
                        <p>
                            Siempre seran los mejores tanto en precio como en la calidad del servicio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin testimonios -->


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

    <!--boton de regresar -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre carga -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!--  librerias JavaScript -->
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