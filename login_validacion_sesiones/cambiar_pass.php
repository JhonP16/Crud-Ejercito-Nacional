<?php

    session_start();

    $correo= $_SESSION['correo'];
    $pass = $_SESSION['pass'];

    include "conexion.php";

    $usu = $_POST["clave1"];
    $clave = $_POST["clave"];
    $clave2 = $_POST["clave2"];

    $clave_capturada = "SELECT * FROM atom_rupture WHERE correo = '$correo' and pass = '$pass'";

    $respuesta = mysqli_query($conexion,$clave_capturada);

    $fila = mysqli_fetch_row($respuesta);
    $traer_clave = $fila[3];

    if($clave != $clave2){
        echo "<script>
        
            alert('Las claves no coinciden');
            window.history.go(-1);

        </script>";

    }elseif($usu == $traer_clave){
        $nueva_clave = mysqli_query($conexion, "UPDATE atom_rupture SET pass = '$clave' WHERE pass = '$usu' and correo = '$correo'");

        echo '<script>
        
            alert("Contraseña cambiada con éxito 🐵");
            window.location="login.html";
        
        </script>';

    }else{
        echo "La contraseña actual no coincide";
        echo "<a href='cambiar.php'> VOLVER</a>";
    }

?>