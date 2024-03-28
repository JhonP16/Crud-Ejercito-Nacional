<?php

    include "conexion.php";

    if (isset($_POST['guardar'])) {
        
        $id_medicamento = $_POST['id_medicamento'];
        $nombre = $_POST['nombre'];
        $tipo_medicamento = $_POST['tipo_medicamento'];
        $laboratorio = $_POST['laboratorio'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];

        $insertar = "INSERT INTO medicamentos(id_medicamento,nombre,tipo_medicamento,laboratorio,precio,stock) VALUES('$id_medicamento', '$nombre', '$tipo_medicamento', '$laboratorio', '$precio', '$stock')";
        
        $resultado = mysqli_query($conexion, $insertar);

        if ($resultado) {
            echo '<script>
            
                alert("Se insertaron los datos correctamente");
                location.href = "./formulario_farmacia.php";
            
            </script>';
        }else{
            echo "Problemas en la inserción";
        }

        mysqli_close($conexion);
    }

?>