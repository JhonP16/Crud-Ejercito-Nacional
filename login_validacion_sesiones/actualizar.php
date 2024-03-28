<?php

    include "conexion.php";

    $edit = $_GET['edit'];

    //echo $edit;

    $resultado = mysqli_query($conexion, "SELECT * FROM medicamentos WHERE id_medicamento = '$edit'") or die("Problemas en el Select".mysqli_error($conexion));

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar info</title>
    <link rel="stylesheet" href="css/style_actualizar.css">
</head>
<body>

    <form action="actualizar_medicamento.php" method="post">

        <?php

            while ($row = mysqli_fetch_assoc($resultado)) {  ?>
                <div class="grupo">
                <label for="">Id medicamento</label>
                <input type="text" name="id_medicamento" value="<?php echo $row['id_medicamento']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Tipo medicamento</label>
                <input type="text" name="tipo_medicamento" value="<?php echo $row['tipo_medicamento']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Laboratorio</label>
                <input type="text" name="laboratorio" value="<?php echo $row['laboratorio']; ?>">
                </div>
                <br>

                <div class="grupo">
                <label for="">Precio</label>
                <input type="text" name="precio" value="<?php echo $row['precio']; ?>">
                </div>
                <br>
               
                <div class="grupo">
                <label for="">Stock</label>
                <input type="number" name="stock" value="<?php echo $row['stock']; ?>">
                </div>
                <br> <br>

                <div class="cont">
                    <div class="subcont">
                     <input type="hidden" name="codigo" value="<?php echo $edit; ?>">

                     <input class="button2 btn-conf" type="submit" value="Actualizar">
                     <a href=""></a>
                     <input class="button2 btn-conf" type="button" value="Cancelar">
                    </div>
                </div>

      
        <?php
            }

        ?>

    </form>
    
</body>
</html>