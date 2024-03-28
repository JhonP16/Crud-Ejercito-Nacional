<?php

error_reporting(0);

    if($_POST){

        $noches = $_POST['noches'];
        $ciudades = $_POST['ciudades'];

        $costo_noche = valor_hosteria($noches);
        $val_avion = costo_avion($ciudades);
        $costo_vehiculo =  costo_alquiler_vehiculo($noches);

        $resultado = $costo_noche+$val_avion;
        $costo_total = $resultado+$costo_vehiculo;


        
    }


    function valor_hosteria($noc){

        $valor_noche = $noc* 250000;
        return $valor_noche;

    }

    function costo_avion($ciudad){

        $valor_avion = 0;

        if($ciudad == "Cali"){

            $valor_avion = 250000;

        }elseif($ciudad == "Bogota"){

            $valor_avion = 178000;

        }elseif($ciudad == "Bucaramanga"){

            $valor_avion = 450000;

        }elseif($ciudad == "Huila"){

            $valor_avion = 150000;

        }elseif ($ciudad == "Medellin"){

            $valor_avion = 85000;

        }

        return $valor_avion;

    }

    function costo_alquiler_vehiculo($noc){

        $alquiler_dia = 120000*$noc;

        if($noc >=7){

            $alquiler_dia -=130000;

        }elseif($noc >=3){

            $alquiler_dia -=60000;

        }

        return $alquiler_dia;


    }


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostería</title>
    <link rel="stylesheet" href="css/estilo.css">


</head>

<body>

    <center>

    <nav>
    <h1> HOSTELERÍA EL BUEN ERMITAÑO</h1>
    </nav>
   

    <div class="formulario">

    <form action="hosteria.php" method="post">

        <h1><label for=""> FORMULARIO</label></h1> <br> <br>

        <input class="box" type="text" name="noches" placeholder="ingrese número de noches"> <br> <br> <br> 

        <select class="box" name="ciudades" id=""> 

            <option value="Cali">Cali</option>
            <option value="Bogota">Bogota</option>
            <option value="Bucaramanga">Bucaramanga</option>
            <option value="Huila">Huila</option>
            <option value="Medellin">Medellin</option>


        </select> <br> <br> <br>

        <input class="box2" type="submit" name="enviar" value="Enviar"> <br> <br>

    </form>

        <?php

            echo "<p>El valor de la estadía según el número de noches es: </p>".$costo_noche. "<p>COP</p>"."<br>";
            echo "<p> El valor del viaje en avión a la ciudad es de: </p>". $val_avion. "<p>COP</p>". "<br>";
            echo "<p> El valor total de su vuelo es de: </p>". $resultado. "<p>COP</p>";
            echo "<p> El valor por el alquiler del vehiculo es de: </p>". $costo_vehiculo. "<p>COP</p>";
            echo "<p> El valor total de TODO el viaje es de: </p>". $costo_total. "<p>COP</p>";

        ?>

    </div>


    </center>


    
</body>

</html>