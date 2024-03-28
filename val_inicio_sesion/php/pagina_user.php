<?php

session_start();
error_reporting(0);
$sesion = $_SESSION['correo'];

if ($sesion == null || $sesion = ''){

    echo "no tienes permiso para ingresar. ";
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
    <title> Página usuario</title>
</head>
<body>

    <h1 style="color:darkred"> Bienvenido usuario</h1>   
    <h3><a href="cerrar_sesion.php">CERRAR SESION</a></h3> 

</body>
</html>