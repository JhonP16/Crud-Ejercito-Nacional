<?php 

  include "conexion.php";

  $nombre=$_POST["nombre"];

  $filename=$_FILES['archivo']['name'];
  $tipo_arc=$_FILES['archivo']['type'];
  $tam_arc=$_FILES['archivo']['size'];
   
    $info = new SplFileInfo($filename);
    $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);

    
  if ($tam_arc<=500000000)
{
  if ($extension =="zip" || $extension=="rar" || $extension =="7z")
  { 
      $carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyecto_subir_archivos/archivos/';

      move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta.$filename);
     
      if ($extension =="zip") {
          mysqli_query($conexion,"insert into archivos_grandes(nombre,icono,archivo) values ('$_POST[nombre]','icono_zip.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
      }elseif ($extension =="rar") {
          mysqli_query($conexion,"insert into archivos_grandes(nombre,icono,archivo) values ('$_POST[nombre]','icono_rar.jpg','$filename')") or die("Problemas en el select".mysqli_error($conexion));
        } elseif ($extension =="7z") {
          mysqli_query($conexion,"insert into archivos_grandes(nombre,icono,archivo) values ('$_POST[nombre]','icono_7z.png','$filename')") or die("Problemas en el select".mysqli_error($conexion));
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
                   window.alert('EL tamaño excede el limite de 50 MB');
                   window.location.href='formulario_imagenes.html';
                   </script>");
  //echo "EL tamaño excede el limite de 10 MB";


?>

