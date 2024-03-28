<?php

    include "conexion.php";

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $tipo = 'user';

    $insertar = "INSERT INTO usuarios(nombre,usuario,pass) VALUES('$nombre','$usuario','$pass')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '<script>
        
            alert ("El usuario ya está registrado 🤨🐳");
            window.history.go(-1);

        </script>';
        exit();
    }

    $resultado = mysqli_query($conexion,$insertar);

    if($resultado){
        echo '<script>
        
            alert("Datos insertados correctamente");
            window.location.href = "contacto.html";
        
        </script>';

    }else{
        echo "Problemas al insertar los datos";
    }


    mysqli_close($conexion);

?>