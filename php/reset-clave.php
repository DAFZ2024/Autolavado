<?php
// Conexión a la base de datos
include 'conexion_be.php';

// Verificar que el token y las contraseñas se han recibido correctamente
if (isset($_POST['token']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $token = mysqli_real_escape_string($conexion, $_POST['token']);
    $new_password = mysqli_real_escape_string($conexion, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($conexion, $_POST['confirm_password']);

    // Comprobar si las contraseñas coinciden
    if ($new_password === $confirm_password) {
        // Consultar la base de datos para verificar el token
        $query = "SELECT * FROM usuarios WHERE token_reset = '$token'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            // Encriptar la nueva contraseña antes de almacenarla
            $hashed_password = hash('sha512', $new_password);

            // Actualizar la contraseña en la base de datos
            $query = "UPDATE usuarios SET contrasena = '$hashed_password', token_reset = NULL WHERE token_reset = '$token'";
            mysqli_query($conexion, $query);

            // Mostrar un mensaje de éxito y redirigir al usuario
            echo '
            <script>
            alert("Contraseña restablecida correctamente.");
            window.location = "../index.php";
            </script>
            '; 
        } else {
            // Mostrar un mensaje de error si el token no es válido
            echo '
            <script>
            alert("Token inválido o ha expirado.");
            window.location = "../correo-reset.php";
            </script>
            ';
        }
    } else {
        // Mostrar un mensaje de error si las contraseñas no coinciden
        echo '
        <script>
        alert("Las contraseñas no coinciden.");
        window.location = "../reset-claveform.php?token=' . htmlspecialchars($token) . '";
        </script>
        ';
    }
} else {
    // Mostrar un mensaje de error si no se reciben los parámetros necesarios
    echo '
    <script>
    alert("Datos incompletos.");
    window.location = "../correo-reset.php";
    </script>
    ';
}

// Cerrar la conexión
mysqli_close($conexion);

?>
