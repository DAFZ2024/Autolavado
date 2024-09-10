<?php

include 'conexion_be.php';

$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$servicio=$_POST['tipo_servicio'];
$lugar = $_POST['opcion_lugar'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];


// Consulta SQL para insertar la reserva
$query = "INSERT INTO reserva_citas(nombre, gmail, telefono, tipo_servicio, lugar, fecha, hora) 
        VALUES('$nombre', '$correo', '$telefono', '$servicio', '$lugar', '$fecha', '$hora')";

// Verificar si ya existe una cita con estos detalles
$verificar_citas = mysqli_query($conexion, "SELECT * FROM reserva_citas WHERE gmail='$correo' AND telefono='$telefono' AND lugar='$lugar' AND fecha='$fecha' AND hora='$hora'");
$verificar_rep = mysqli_query($conexion, "SELECT * FROM reserva_citas WHERE lugar='$lugar' AND fecha='$fecha' AND hora='$hora'");

// Si ya existe una cita con estos detalles, mostrar un mensaje de error
if(mysqli_num_rows($verificar_citas) > 0){
    echo '
    <script>
        alert("Ya tienes una cita programada con estas indicaciones.");
        window.location = "../location.php";
    </script>
    ';
    exit();
}

// Si ya hay otra cita en ese lugar y hora, mostrar un mensaje de error
if(mysqli_num_rows($verificar_rep) > 0){
    echo '
    <script>
        alert("Ups, ya hay una cita programada para ese momento.");
        window.location = "../location.php";
    </script>
    ';
    exit();
}

// Ejecutar la consulta de inserción
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Tu cita ha sido programada. No olvides asistir.");
        window.location = "../location.php";
    </script>
    ';
    exit();
} else {
    echo '
    <script>
        alert("Hubo un problema con el servidor. Inténtalo nuevamente.");
        window.location = "../location.php";
    </script>
    ';
}

// Cerrar la conexión
mysqli_close($conexion);

?>
