<?php
    session_start();

    if(isset($_session['usuario'])){
        header("location: index.php");
    }

?>



    <!DOCTYPE html>
    <html lang="es">

    <head>
        <link href="assents\css\styleslogin.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>autonew-login</title>
    </head>

    <body>

        <img style="width: 120px; height: 120px; border-radius: 50%; box-shadow: 10px 10px 20px black; " src="img/logo.png" id="mi-imagen">
        <h1 style="color:#05553E; font-size: 45px">Auto<span style="color: black; font-size: 40px">New</span></h1>


        <h2>Inicia sesión o registrate para acceder a multiples beneficios</h2>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="php\registro_usuario_be.php" method="POST">
                    <h1>Crear cuenta</h1>

                    <span>Usa tu correo para registrarse </span>
                    <input type="text" placeholder="Nombre" name="nombre_completo" required/>
                    <input type="email" placeholder="Email" name="correo_usuario" required/>
                    <input type="password" placeholder="Contraseña" name="contrasena" required />
                    <button>Registarse</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="php\login_usuario_be.php" method="POST">
                    <h1>Inicia sesión</h1>

                    <span>usa tu cuenta </span>
                    <input type="email" placeholder="Email" name="correo_usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <a href="correo-reset.php">¿Olvidaste tu contraseña?</a>
                    <button type="submit">Iniciar sesión</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido!</h1>
                        <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
                        <button class="ghost" id="signIn">Iniciar sesión</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hola, Amigo!</h1>
                        <p>Introduce tus datos personales y comienza tu viaje con nosotros.</p>
                        <button class="ghost" id="signUp">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript integrado -->
        <script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });
        </script>
    </body>

    </html>