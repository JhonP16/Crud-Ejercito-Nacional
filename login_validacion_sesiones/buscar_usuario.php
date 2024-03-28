<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="css/style_buscar.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="sub-container">
            <div class="logo">
                    <h1>CAMBIAR CONTRASEÑA</h1>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="pagina_admin.php">Inicio</a></li>
                    <li><a href=""> PERFIL </a>
                    <ul class="submenu">
                        <li> <a href="formulario_admin.php"> Ingresar usuarios </a></li>
                        <li> <a href="mostrar_usuario.php"> Mostrar usuario </a></li>
                        <li> <a href="buscar_usuario.php"> Buscar usuario </a></li>
                        <li> <a href="cerrar_sesion.php"> CERRAR SESION </a></li>
                        </ul>
                    </li> 	
                </ul>
        </nav>
        </div>
        </div>
    </header>

<div class="main_container">
<div class="sub_container">
<form action="buscar_usuario.php" method="post">

<input type="search" name="dato" placeholder="Ingrese el nombre a buscar">
<input type="submit" name="buscador" value="buscar" class="boton">

</form>
</div>
</div>

<center>
<?php


include "conexion.php";
if (isset($_POST['buscador'])) {
    $buscar = $_POST ['dato'];

    if(empty ($buscar)){
        echo "Ingrese un dato, el campo esta vacio";

    }else{

        $consulta = "SELECT * FROM atom_rupture WHERE nombre LIKE '%".$buscar."%'";
        $mostrar = mysqli_query($conexion, $consulta);
        $var_total = mysqli_num_rows($mostrar);

        if($row = mysqli_fetch_array($mostrar)) {

            echo "Los resultados para esta busqueda son: $buscar";

            echo "<br>";

            echo "el total de datos fueron: $var_total";

            echo "<br>";
            echo "<br>";

            echo "<hr>";

            ?>

            <?php
            
            do{
             ?>
                <br>
                <tr> <td> <?php echo $row['id_user']; ?> </td> </tr> <br> <br>
                <tr> <td> <?php echo $row['nombre']; ?> </td> </tr> <br> <br>
                <tr> <td> <?php echo $row['tipo']; ?> </td> </tr>


                <?php
            }
            
            while ($row = mysqli_fetch_array($mostrar));

        }else{
            echo "No hay datos para esta busqueda: $buscar";
        }
    }
}

?>
</center>

</body>
</html>