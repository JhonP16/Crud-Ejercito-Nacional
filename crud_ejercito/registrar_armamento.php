<?php

    include "conexion.php";

    if (isset($_POST['guardar'])) {
        
        $id_arma = $_POST['id_arma'];
        $nombre = $_POST['nombre'];
        $tipo_arma = $_POST['tipo_arma'];
        $tipo_municion = $_POST['tipo_municion'];
        $fabricante = $_POST['fabricante'];
        $stock = $_POST['stock'];

        $insertar = "INSERT INTO armamento(id_arma,nombre,tipo_arma,tipo_municion,fabricante,stock) VALUES('$id_arma', '$nombre', '$tipo_arma', '$tipo_municion', '$fabricante', '$stock')";
        
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo '<script>
            
                alert("Armamento registrado correctamente");
                location.href = "./crud_registro.php";
            
            </script>';
        }else{
            echo "Problemas en la inserción";
        }

        mysqli_close($conexion);
    }

?>