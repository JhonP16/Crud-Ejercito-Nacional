<?php 

  include "conexion.php";

  $nombre=$_POST["nombre"];
	$filename=$_FILES['archivo']['name'];
	$tipo_arc=$_FILES['archivo']['type'];
	$tam_arc=$_FILES['archivo']['size'];
   
    $info = new SplFileInfo($filename);
    $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
 
	if ($tam_arc<=100000000)
{
	if ($extension =="mp4" || $extension=="mp3" || $extension=="webm" || $extension=="mov" || $extension=="wav" || $extension=="avi")
	{
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyecto_subir_archivos/archivos/';

			move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta.$filename);
		  
      if ($extension =="mp4") {
          mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','mp4.jpg','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="mp3") {
          mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','mp3.jpg','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="webm") {
          mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','webm.jpg','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="mov") {
          mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','wav.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="wav") {
        mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','wav.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="avi") {
        mysqli_query($conexion,"insert into videos(nombre,icono,archivo) values ('$_POST[nombre]','wav.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      } 
			
			
			 echo ("<script LANGUAGE='JavaScript'>
                   window.alert('Se Inserto el archivo Correctamente!!!');
                   window.location.href='formulario_imagenes.html';
                   </script>");
  		/*echo "El archivo fue cargado con exito";*/

	}else
        echo ("<script LANGUAGE='JavaScript'>
                   window.alert('Tipo de archivo incorrecto');
                   window.location.href='formulario_imagenes.html';
                   </script>");

		//echo "Tipo de archivo incorrecto";
}else
    echo ("<script LANGUAGE='JavaScript'>
                   window.alert('EL tamaño excede el limite de 10 MB');
                   window.location.href='formulario_imagenes.html';
                   </script>");
	//echo "EL tamaño excede el limite de 10 MB";

   
?>


</body>
</html>

