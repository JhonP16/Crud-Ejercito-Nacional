<?php

include "conexion.php";


    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    error_reporting(0);
    session_start();

    $_SESSION['correo'] = $correo;

    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' ";

    $resultado = mysqli_query($conexion,$consulta);

    $fila = mysqli_num_rows($resultado);

    if($fila >0){
        header('location:pagina_user.php');

    }else{
        echo "Problemas para iniciar sesión";

    }

    mysqli_close($conexion);




?>