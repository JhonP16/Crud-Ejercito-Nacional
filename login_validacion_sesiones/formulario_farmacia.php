<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Farmacia </title>
    <link rel="stylesheet" href="css/style_farmacia.css">
</head>

<body>

    <nav>
        <h1> Ingreso de medicamentos</h1>
    </nav>

    <form action="registrar_medicamentos.php" method="post">

        <div class="grupo">

            <label> Id medicamento</label>
            <input type="text" name="id_medicamento" placeholder="Ingrese el código de medicamento" required>

        </div>

        
        <div class="grupo">

            <label> Nombre</label>
            <input type="text" name="nombre" placeholder="Ingrese nombre medicamento" required>

        </div>

        <div class="grupo">

            <label> Tipo de medicamento</label>
            <input type="text" name="tipo_medicamento" placeholder="Ingrese tipo medicamento" required>

        </div>


        <div class="grupo">

            <label> Laboratorio</label>
            <input type="text" name="laboratorio" placeholder="Ingrese nombre laboratorio" required>

        </div>

        <div class="grupo">

            <label> Precio</label>
            <input type="text" name="precio" placeholder="Ingrese el precio" required>

        </div>

        
        <div class="grupo">

            <label> Stock</label>
            <input type="number" name="stock" placeholder="Ingrese la cantidad" required>

        </div>

        <div class="grupo">
            <div class="subgrupo">
            <button class="btn btn-conf" type="submit" name="guardar" value="guardando"> Guardar</button>
            
            <button class="btn btn2" type="submit" name="mostrar" value="mostrar"><a href="mostrar_medicamento.php">Mostrar</a></button>
            </div>

        </div>


    </form>
    
</body>

</html>