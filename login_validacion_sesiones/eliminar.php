<?php

include "conexion.php";


    if(!empty($_POST)){
        $codmedi = $_POST['codi'];
        $query_borrar = mysqli_query($conexion, "DELETE FROM medicamentos WHERE id_medicamento = '$codmedi'");
        if($query_borrar){
            echo "<script>
            
            alert('El medicamento se eliminó correctamente');
            location.href='mostrar_medicamento.php';
            
            </script>";
        }else{
            echo "Error al eliminar";
        }
    }

    $del = $_GET['del'];

    //echo $del;

    $resultado = mysqli_query($conexion, "SELECT * FROM medicamentos WHERE id_medicamento = '$del'") or die("Problemas en el Select".mysqli_error($conexion));

    while($row = mysqli_fetch_array($resultado)){
        $codigo = $row['id_medicamento'];
        $nombre = $row['nombre'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los chamos son la verga info</title>
    <link rel="stylesheet" href="css/style_eliminar.css">
</head>
<body>

    <form action="" method="post">

                <div class="cont">
                    <div class="subcont">

                     <input type="hidden" name="codi" value="<?php echo $del; ?>">

                     <p>¿Estás seguro de eliminar el registro?</p> <br>
                     <?php echo " ".$codigo. " ".$nombre." " ?>
                      <br> <br>


                     <input class="button2 btn-conf" type="submit" value="Aceptar">

                     
                     <button class="button2 btn-conf"><a href="mostrar_medicamento.php"> Cancelar</a></button> 

                    </div>
                </div>

    </form>
    
</body>
</html>
