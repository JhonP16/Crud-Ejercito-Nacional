<?php

    if(isset($_POST['submit'])){

        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];

    }

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Formulario Alumno</title>
</head>

<body>

    <header>

        <nav>
        <h1>REGISTRO ALUMNO ÁFRICA</h1>
        <img src="images/child.jpg" width="300px" alt="">
        </nav>

    </header>


    <center>
    <div class="formulario">

    <form action="" method="post">

        <label for="name"> Nombre</label> <br> <br>
        <input type="text" name="nombre" id="name"  placeholder="Ingrese el nombre" value="<?php if(isset($nombre)){echo $nombre;} ?>"> <br> <br>

        <label for="edad"> Edad </label> <br> <br>
        <input type="text" name="edad" id="edad" placeholder="Ingrese la edad" value="<?php if(isset($edad)){echo $edad;} ?>"> <br> <br>

        <label for="correo"> Correo </label> <br> <br>
        <input type="text" name="correo" id="correo" placeholder="Ingrese el correo" value="<?php if(isset($correo)){echo $correo;} ?>"> <br> <br> <br>

        <input type="submit" name="submit" value="Ingresa"> <br>

        <?php

            include "validacion.php"

        ?>

    </form>

    </div>
    </center>

    
</body>

</html>