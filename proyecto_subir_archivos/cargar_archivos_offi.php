<?php 

  include "conexion.php";

  $nombre=$_POST["nombre"];

	$filename=$_FILES['archivo']['name'];
	$tipo_arc=$_FILES['archivo']['type'];
	$tam_arc=$_FILES['archivo']['size'];
   
    $info = new SplFileInfo($filename);
    $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
 
	if ($tam_arc<=5000000)
{
	if ($extension =="docx" || $extension=="doc" || $extension=="xlsx" || $extension=="xls" || $extension=="ppt" || $extension=="pptx" || $extension=="pdf")
	{
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyecto_subir_archivos/archivos/';

			move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta.$filename);
		  
      if ($extension =="docx" || $extension=="doc") {
          mysqli_query($conexion,"insert into archivos(nombre,icono,archivo) values ('$_POST[nombre]','icono_word.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="xlsx" || $extension=="xls") {
          mysqli_query($conexion,"insert into archivos(nombre,icono,archivo) values ('$_POST[nombre]','icono_excel.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="ppt" || $extension=="pptx") {
          mysqli_query($conexion,"insert into archivos(nombre,icono,archivo) values ('$_POST[nombre]','icono_power.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="pdf") {
          mysqli_query($conexion,"insert into archivos(nombre,icono,archivo) values ('$_POST[nombre]','icono_pdf.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
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
	//echo "EL tamaño excede el limite de 5 MB";

   
?>

