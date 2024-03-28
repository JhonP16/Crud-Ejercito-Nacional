<?php

    include "conexion.php";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $tipo = 'User';

    $insertar = "INSERT INTO atom_rupture(nombre,correo,pass,tipo) VALUES('$nombre','$correo','$pass', '$tipo')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM atom_rupture WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '<script>
        
            alert "El usuario ya está registrado 😎";
            window.history.go(-1);

        </script>';
        exit();
    }

    $resultado = mysqli_query($conexion,$insertar);

    if($resultado){
        echo '<script>
        
            alert("Datos insertados correctamente");
            header("location:login.html");
        
        </script>';

    }else{
        echo "Problemas al insertar los datos";
    }


    mysqli_close($conexion);

?>