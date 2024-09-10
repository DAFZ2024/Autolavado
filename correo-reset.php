<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Correo de restablecimiento </title>

    <link rel="stylesheet" href="css\correo-reset.css">
</head>

<body>
    <div class="login">
        <h1>Restablecimiento de contraseña</h1>
        <form action="php\reset-correo.php" method="post">
            <input type="email" id="email" name="correo_usuario" placeholder="correo" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Restablecer.</button>
        </form>
    </div>
</body>

</html>