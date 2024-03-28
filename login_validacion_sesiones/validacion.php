<?php

//este codigo permite validar el ingreso del login a una plataforma

include "conexion.php";

if(isset($_POST['enviar'])){

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    session_start();
    error_reporting(0);
    $_SESSION['usuario'] = $correo;
    $_SESSION['pass'] = $pass;
    header('location:pagina_user.php');

    $consulta = "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' ";

    $resultado = mysqli_query($conexion,$consulta);

    $fila = mysqli_num_rows($resultado);

    if($fila >0){
        header('location:pagina_user.php');

    }else{
        echo "Problemas para iniciar sesión";

    }

    mysqli_close($conexion);

}


?>