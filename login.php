<?php
include_once("Librerias/mysql.php");

if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {


    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consultarUsuario = "SELECT contraseña FROM users WHERE nombre ='" . $usuario . "';";

    $extraido =  Conexion($consultarUsuario);


    if ($extraido['contraseña'] === $contraseña) {
        header("Location: index.php");
    } else {
    }
}




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>

<body>
    <div class="cabecera">
        <h1>Inicio de sesión</h1>
    </div>
    <div class="contenido">
        <div class="formulario">
            <form action="#" method="post">
                <div class="usuario">
                    <label for="usuario">Usuario: </label>
                    <input type="text" id="usuario" name="usuario">
                </div>
                <div class="contraseña">
                    <label for="contraseña">Contraseña: </label>
                    <input type="password" name="contraseña" id="contraseña">
                </div>
                <div class="boton">
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
</body>

</html>