<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Correo de restablecimiento </title>

    <link rel="stylesheet" href="css\correo-reset.css">
</head>

<body>
<div class="login">
	<h1>Nueva contraseña</h1>
    <form action="php\reset-clave.php" method="POST">
    <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
    	<input type="password" id="new_password" name="new_password"placeholder="Contraseña nueva" required="required" />
        <input type="password" id="confirm_password" name="confirm_password"  placeholder="Confirmar contraseña" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Cambiar contraseña</button>
    </form>
</div>
</body>

</html>