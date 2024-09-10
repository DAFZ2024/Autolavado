<?php

// Conexión a la base de datos
include 'conexion_be.php';

// Verificar si el correo electrónico existe en la base de datos
$correo = $_POST['correo_usuario'];
$correo = mysqli_real_escape_string($conexion, $correo);
$query = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = mysqli_query($conexion , $query);

if (mysqli_num_rows($result) > 0) {
    // El correo electrónico existe, generar un token de restablecimiento
    $token = md5(uniqid(mt_rand(), true));

    // Guardar el token en la base de datos
    $query = "UPDATE usuarios SET token_reset = '$token' WHERE correo = '$correo'";
    mysqli_query($conexion, $query);

    // Enviar un correo electrónico con el enlace de restablecimiento
    $para = $correo;
    $asunto = "Restablecimiento de contraseña";
    $mensaje = "
    <html>
        <head>
            <title>Restablecimiento de contraseña</title>
        </head>
        <body>
            <h2>Restablecimiento de contraseña</h2>
            <p>Hola, para restablecer tu contraseña, haz clic en el siguiente enlace:</p>
            <p><a href='http://localhost/login-register/reset-claveform.php?token=$token'>http://localhost/login-register/reset-claveform.php?token=$token</a></p>
        </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Duver Forero <du28fo@gmail.com>\r\n";

    mail($para, $asunto, $mensaje, $headers);

    echo '
        <script>
        alert("El correo de restablecimiento fue enviado con éxito, por favor revisa tu correo.");
        window.location = "../index.php";
        </script>
    '; 
} else {
    echo '
        <script>
        alert("Usuario no existe, por favor verifique los datos introducidos");
        window.location = "../correo-reset.php";

        </script>
    '; 
    exit;
}

// Cerrar la conexión
mysqli_close($conexion);


?>
