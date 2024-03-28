<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de imagenes </title>
 <link rel="stylesheet" href="css/style_listar.css">
</head>
<body>

<?php 

include "conexion.php";

?>
<div class="container_table">
  <div class="table_elements">
    <h1>Lista de archivos</h1>
    <table>
  <tr>
    <th> Codigo Imagen </th>
    <th> Nombre Imagen </th>
    <th> Archivo </th>
     <th> Imagen </th>
    <th colspan="2">Descargar </th>
  </tr>
    <tbody>
      <?php 

           $registros = mysqli_query($conexion,"SELECT * FROM galeria") or die("problemas en el select".mysqli_error($conexion));
           
           while ($row = mysqli_fetch_array($registros)){  ?>
          
           <tr>
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['nombre']?></td>
                <td> <?php echo $row['archivo']?> </td>
                <td><img width="40" src="archivos/<?php echo $row['archivo']; ?>"></td>
              <td> 

            <!-- BOTÓN DE DESCARGAR ARCHIVOS-->

            <a download href="archivos/<?php echo $row['archivo']?>"> 
            <button class="btn">
            <div class="svg-wrapper-1">
            <div class="svg-wrapper">
            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
             <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
            </svg>
            </div>
            </div>
            <span class="spann">Descargar</span>
            </button> 
          </a>


          </td>
            

           </tr>
  


       <?php  } ?>

    </tbody>

</table>

  </div>
</div>

<a href="formulario_imagenes.html" class="back"> VOLVER  </a>
</body>
</html>
