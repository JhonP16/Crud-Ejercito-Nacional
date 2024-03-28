<?php 

    include "conexion.php";

    $codigo = $_POST['codigo'];

    $consulta = ("UPDATE armamento SET id_arma = '$_POST[id_arma]', nombre='$_POST[nombre]', tipo_arma='$_POST[tipo_arma]', tipo_municion='$_POST[tipo_municion]', fabricante='$_POST[fabricante]', stock='$_POST[stock]' WHERE id_arma = '$codigo' ");

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<script>
        
            alert('El armamento se actualizó correctamente');

            location.href='mostrar_armamento.php';

        </script>";
    }

    mysqli_close($conexion);
?>