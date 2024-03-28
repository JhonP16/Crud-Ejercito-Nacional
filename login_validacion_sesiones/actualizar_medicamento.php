<?php 

    include "conexion.php";

    $codigo = $_POST['codigo'];

    $consulta = ("UPDATE medicamentos SET id_medicamento = '$_POST[id_medicamento]', nombre='$_POST[nombre]', tipo_medicamento='$_POST[tipo_medicamento]', laboratorio='$_POST[laboratorio]', precio='$_POST[precio]', stock='$_POST[stock]' WHERE id_medicamento = '$codigo' ");

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<script>
        
            alert('El medicamento se actualizó correctamente');

            location.href='mostrar_medicamento.php';

        </script>";
    }

    mysqli_close($conexion);
?>