<?php

    include "conexion.php";

    if (isset($_POST['guardar'])) {
        
        $id_implemento = $_POST['id_implemento'];
        $nombre = $_POST['nombre'];
        $tipo_implemento = $_POST['tipo_implemento'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $insertar = "INSERT INTO implementos(id_implemento,nombre,tipo_implemento,marca,precio,stock) VALUES('$id_implemento', '$nombre', '$tipo_implemento', '$marca', '$precio', '$stock')";
        
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo '<script>
            
                alert("Implemento registrado correctamente");
                location.href = "./crud_registro.php";
            
            </script>';
        }else{
            echo "Problemas en la inserción";
        }

        mysqli_close($conexion);
    }

?>