<?php

//este codigo permite validar el ingreso del login a una plataforma

include "conexion.php";

if(isset($_POST['enviar'])){

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];


    $admin = mysqli_query($conexion, "SELECT * FROM atom_rupture WHERE correo = '$correo' and pass= '$pass' and tipo = 'admin'");
    $user = mysqli_query($conexion, "SELECT * FROM atom_rupture WHERE correo = '$correo' and pass= '$pass' and tipo = 'User'");
    $est = mysqli_query($conexion, "SELECT * FROM atom_rupture WHERE correo = '$correo' and pass= '$pass' and tipo = 'Estudiante'");

    if(mysqli_num_rows($admin)> 0){

        $fila = mysqli_fetch_row($admin);
        $ced = $fila[0];
        $name = $fila[1];
        $correo = $fila[2];
        $pass = $fila[3];
        $tipo = $fila[4];
        session_start();
        $_SESSION['id_usuario'] = $ced;
        $_SESSION['nombre'] = $name;
        $_SESSION['correo'] = $correo;
        $_SESSION['pass'] = $pass;
        $_SESSION['tipo'] = $tipo;
        $_SESSION['time'] = time();
        header('location:pagina_admin.php');
    }elseif(mysqli_num_rows($user)>0){

            $fila = mysqli_fetch_row($user);
            $name = $fila[1];
            $correo = $fila[2];
            session_start();
            $_SESSION['nombre'] = $name;
            $_SESSION['correo'] = $correo;
            $_SESSION['time'] = time();
            header('location:pagina_user.php');

        }
        elseif(mysqli_num_rows($est)>0){

            $fila = mysqli_fetch_row($est);
            $ced = $fila[0];
            $name = $fila[1];
            session_start();
            $_SESSION['id_usuario']= '$ced';
            $_SESSION['nombre']= '$name';
            $_SESSION['correo']= '$correo';
            header('location:pagina_est.php');

        }


    mysqli_close($conexion);

}


?>