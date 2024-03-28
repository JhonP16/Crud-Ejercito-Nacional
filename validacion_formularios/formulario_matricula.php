<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
    <title>Mensualidad matrícula</title>
</head>

<body>

    <header>

        <nav>
        <h1> MENSUALIDAD COLEGIO</h1>
        <img src="images/nelson.jpg" width="200px" alt="">
        </nav>

    </header>


    <?php

        error_reporting(0);

        if(isset($_POST['submit'])){

        $nombre = $_POST['nombre'];
        $estrato = $_POST['estrato'];
        $promedio = $_POST['promedio'];

        }

        if ($estrato == "1") {
            
            $selA = 'SELECTED';

        }else{

            $selA = "";

        }

        if ($estrato =="2") {
            
            $selB = 'SELECTED';

        }else{

            $selB = "";

        }

        if ($estrato =="3") {
            
            $selC = 'SELECTED';

        }else{

            $selC = "";

        }

        if ($estrato =="4") {
            
            $selD = 'SELECTED';

        }else{

            $selD = "";

        }


        $mensajeN = "";
        $mensajeE = "";
        $mensajeP = "";

    if(isset($_POST['submit'])){


        if (empty($nombre)) {
            
            $mensajeN = "Debe ingresar el nombre del alumno 😉 <br>";

        }

        if($estrato == ""){

            $mensajeE = "Debe seleccionar un estrato 👻 <br>";

        }

        if (empty($promedio || !is_numeric($promedio))) {
            
            $mensajeP = "Debe ingresar correctamente el promedio 🥵 <br>";

        }else{

            if($promedio<1 || $promedio > 20){

                $mensajeP = "Debe ingresar un número entre 1 y 20 <br>";

            }


        }

    }


    ?>


    <center>
    <div class="formulario">

    <form action="#" method="post">

        <label for="name"> Nombre del alumno</label> <br> <br>
        <input type="text" name="nombre" id="name"  placeholder="Ingrese el nombre" value="<?php echo $nombre; ?>"> <br> <br>
        <p id="error"><?php echo $mensajeN; ?></p>

        <label> Seleccione el estrato </label> <br> <br>
        <select name="estrato" id="" SELECTED>

            <option value=""> - Seleccione el estrato - </option>
            <option value="1"<?php echo $selA; ?>>  1  </option>
            <option value="2"<?php echo $selB; ?>>  2  </option>
            <option value="3"<?php echo $selC; ?>>  3  </option>
            <option value="4"<?php echo $selD; ?>>  4  </option>

        </select> <br> <br>
        <p id="error"><?php echo $mensajeE; ?></p>


        <label for="correo"> Ingrese promedio </label> <br> <br>
        <input type="text" name="promedio" id="promedio" placeholder="Ingrese el promedio" value="<?php echo $promedio; ?>" > <br> <br>
        <p id="error"><?php echo $mensajeP; ?></p>


        <?php

            if (!empty($promedio) && $estrato != "" && $promedio >=1 && $promedio <=20) {
                
                //Fijar el dinero en el formulario

                if($estrato == "1"){
                    $valor_mensualidad = 500000;

                }
                
                if($estrato == "2"){
                    $valor_mensualidad = 650000;

                }
     
                if($estrato == "3"){
                    $valor_mensualidad = 750000;

                }
                
                if($estrato == "4"){
                    $valor_mensualidad = 850000;

                }

                //Realizar operaciones

                if($promedio < 12){

                    $descuento = 0;

                }

                if($promedio >= 13 && $promedio <=15){

                    $descuento = $valor_mensualidad*0.1;

                }

                if($promedio >= 16 && $promedio <=17){

                    $descuento = $valor_mensualidad*0.15;

                }

                if($promedio >= 18 && $promedio <=18){

                    $descuento = $valor_mensualidad*0.25;

                }

                if($promedio >= 20){

                    $descuento = $valor_mensualidad*0.5;

                }

                $monto_cancelar = $valor_mensualidad-$descuento;

            }

        ?>

        <input type="submit" name="submit" value="Calcular"> <br> <br>


        <h2> <pre>MENSUALIDAD: <?php  echo number_format($valor_mensualidad, 2, ".", ",") ?> </pre> </h2>
        <h2> <pre>VALOR DEL DESCUENTO: <?php  echo number_format($descuento, 2, ".", ",") ?> </pre> </h2>
        <h2> <pre>VALOR A CANCELAR: <?php  echo number_format($monto_cancelar, 2, ".", ",") ?> </pre> </h2>

    </form>

    </div>
    </center>

    
</body>

</html>