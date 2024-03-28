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
    <link rel="stylesheet" href="css/style_admin.css">
    <title> Página mostrar usuarios</title>
</head>
<body>

    <header class="header">
    <div class="container">
        <div class="sub-container">
        <div class="logo">
                <h1>MOSTRAR USUARIOS</h1>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="pagina_admin.php">Inicio</a></li>
                <li><a href="#">Ver empleados <i class="icon-abajo2"></i></a>
                <li><a href=""> PERFIL </a>
                <ul class="submenu">
                    <li> <a href="cambiar.php"> Cambiar contraseña  </a></li>
                    <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
                    <li> <a href="buscar_usuario.php"> Buscar usuario </a></li>
                    <li> <a href="cerrar_sesion.php"> CERRAR SESION </a></li>
                    </ul>
                </li> 	
            </ul>
    </nav>
    </div>
    </div>
    </header>

    <div class="container_table">
        <div class="table_elements">
        <table>

            <thead>
                <tr>
                    <td> ID_USUARIO</td>
                    <td> NOMBRE</td>
                    <td> CORREO</td>
                    <td> CONTRASEÑA</td>
                    <td> TIPO USUARIO</td>
                </tr>
            </thead>

            <?php

                include "conexion.php";

                $consulta = "SELECT * FROM atom_rupture";
                $resultado = mysqli_query($conexion,$consulta);

                while($mostrar = mysqli_fetch_array($resultado)){

                ?>

                <tr>
                    <td><?php echo $mostrar['id_user']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['correo']; ?></td>
                    <td><?php echo $mostrar['pass']; ?></td>
                    <td><?php echo $mostrar['tipo']; ?></td>
                </tr>
                    
                <?php
                }

            ?>
            </div>
        </table>

    </div>

</body>
</html>