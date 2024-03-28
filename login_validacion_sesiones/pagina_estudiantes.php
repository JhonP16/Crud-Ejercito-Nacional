<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['correo'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" src="img/short-ico.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles_form.css">
    <title> Página estudiante</title>
</head>
<body>

    <h1>PANEL DE ESTUDIANTE</h1>
    <h2>BIENVENIDO, Estudiante <?php echo $_SESSION['correo']; ?></h2>
    <h3><a href="cierre_sesion.php">CERRAR SESIÓN</a></h3>

</body>
</html>