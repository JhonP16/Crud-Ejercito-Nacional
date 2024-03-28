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
    <link rel="stylesheet" href="css/style_cambiar.css">
    <title> Cambiar contraseña</title>
</head>
<body>

    <header class="header">
    <div class="container">
        <div class="sub-container">
        <div class="logo">
                <h1>CAMBIAR CONTRASEÑA</h1>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="pagina_admin.php">Inicio</a></li>
                <li><a href=""> PERFIL </a>
                <ul class="submenu">
                    <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
                    <li> <a href="mostrar_usuario.php"> Mostrar usuario </a></li>
                    <li> <a href="buscar_usuario.php"> Buscar usuario </a></li>
                    <li> <a href="cerrar_sesion.php"> CERRAR SESION </a></li>
                    </ul>
                </li> 	
            </ul>
    </nav>
    </div>
    </div>
    </header>
    
    <div class="main">
    <div class="container_form">
        <div class="cont-elementos">
        <form action="cambiar_pass.php" method="post">

            <h2> Ingrese la clave actual</h2> <br>
            <input type="text" name="clave1" placeholder="Ingrese la clave actual" required="required"> <br><br>

            <h2> Ingrese la contraseña nueva</h2> <br>
            <input type="text" name="clave" placeholder="Ingrese nueva clave" required="required"> <br><br>

            <h2> Ingrese de nuevo la contraseña</h2> <br>
            <input type="text" name="clave2" placeholder="Ingrese la clave de nuevo" required="required"> <br><br>

            <input type="submit" name="boton" value="CAMBIAR">

        </form>
        </div>
    </div>
    </div>

</body>
</html>