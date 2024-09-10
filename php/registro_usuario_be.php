<?php

    include 'conexion_be.php';


    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo_usuario'];
    $contrasena = $_POST['contrasena'];

// encriptar contrasena
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, contrasena) 
                VALUES('$nombre_completo', '$correo', '$contrasena')";
// verificar que no se repita el correo en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo= '$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intente con otro diferente");
            window.location = "../index.php"
        </script>
        ';
        exit();

    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../index.php";
        </script>
        ';

    }else{
        echo '
        <script>
            alert("Intentalo nuevamente, usuario no registrado");
            window.location = "../index.php";
        </script>
        ';
    }


mysqli_close($conexion);