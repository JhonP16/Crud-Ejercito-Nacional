<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar medicamento</title>
    <link rel="stylesheet" href="css/style_mostrar.css">
</head>
<body>

    <?php

        include "conexion.php";

    ?>

<div class="container_table">
        <div class="table_elements">
            <h1> Tabla de medicamentos</h1>
    <table>
        <tr>
            <th>Id medicamento</th>
            <th> Medicamento</th>
            <th> Tipo medicamento</th>
            <th> Laboratorio</th>
            <th> Precio</th>
            <th> Stock</th>
            <th colspan="2"> Botones de acción</th>
        </tr>

        <tbody>
            <?php

                $registro = mysqli_query($conexion, "SELECT * FROM medicamentos") or die("Problemas en el select".mysqli_error($conexion));

                while($row = mysqli_fetch_array($registro)){ ?>

                    <tr>
                        <td><?php echo $row['id_medicamento']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['tipo_medicamento']; ?></td>
                        <td><?php echo $row['laboratorio']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['stock']; ?></td>


                        <td>
                            <a href="actualizar.php?edit=<?php echo $row['id_medicamento']; ?>"><button class="btn">
                                <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                </svg>
                                </div>
                                </div>
                                <span class="spann">Actualizar</span>
                                </button>
                            </a>
                        </td>

                        <td>
                            <a href="eliminar.php?del=<?php echo $row['id_medicamento']; ?>"><button class="btn2 tooltip">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" height="25" width="25">
                                    <path fill="#fff" d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                                <span class="tooltiptext">Eliminar</span>
                                </button>
                            </a>
                        </td>
                    </tr>
            <?php
                }

            ?>
        </tbody>
    </table>
        </div>
</div>

</body>
</html>