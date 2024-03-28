<?php

    session_start();
    error_reporting(0);

   $varsesion = $_SESSION['correo'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        header('location:login.php');
        die();
    }else{
        if ((time() - $_SESSION['time']) > 60) {
            header('location:logout.php');
        }
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
    <link rel="stylesheet" href="css/style_admin.css">
    <title> Página Admin</title>
</head>
<body>

    <header class="header">
    <div class="container">
        <div class="sub-container">
        <div class="logo">
                <h1>PANEL DE ADMINISTRADOR</h1>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Ver empleados <i class="icon-abajo2"></i></a>
                <li><a href=""> PERFIL </a>
                <ul class="submenu">
                    <li> <a href="cambiar.php"> Cambiar contraseña  </a></li>
                    <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
                    <li> <a href="mostrar_usuario.php"> Mostrar usuario </a></li>
                    <li> <a href="buscar_usuario.php"> Buscar usuario </a></li>
                    <li> <a href="cierre_sesion.php"> CERRAR SESION </a></li>
                    </ul>
                </li> 	
            </ul>
    </nav>
    </div>
    </div>
    </header>

    <div class="box_admin">
    <h2>BIENVENIDO ADMINISTRADOR <?php echo $_SESSION['correo']; ?></h2>
    <h3><a href="cierre_sesion.php">CERRAR SESIÓN</a></h3>
    </div>

    <div class="box-btn">
    <button> 
        <a href="./formulario_farmacia.php">Farmacia</a>
    </button>
    </div>

<script>
    // Tiempo de inactividad deseado en milisegundos (15 minutos).
    var tiempoInactividad = 1 * 60 * 1000; // 15 minutos en milisegundos
    var contadorInactividad = 0;

    function restablecerContador() {
        contadorInactividad = 0;
    }

    function verificarInactividad() {
        contadorInactividad += 1000; // Añadir 1 segundo al contador cada segundo.

        // Si el contador de inactividad supera el tiempo de inactividad deseado, mostrar un mensaje y cerrar la sesión.
        if (contadorInactividad >= tiempoInactividad) {
            alert("Se ha detectado inactividad. Su sesión se cerrará automáticamente.");
            window.location.href = "cierre_sesion.php"; // Redirigir a la página de cierre de sesión.
        }
    }

    // Restablecer el contador de inactividad cuando el usuario realice una acción.
    document.addEventListener("mousemove", restablecerContador);
    document.addEventListener("keypress", restablecerContador);

    // Verificar la inactividad cada segundo.
    setInterval(verificarInactividad, 1000);
</script>

</body>
</html>