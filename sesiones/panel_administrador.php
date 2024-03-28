<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel administrador</title>
</head>

<body>

    <h1 style="color:darkred">PANEL ADMINISTRADOR</h1>
    <h2>BIENVENIDO <?php echo $_SESSION['usuario']; ?></h2>

    <h3><a href="cerrar_sesion.php">CERRAR SESIÓN</a></h3>
    
</body>

</html>