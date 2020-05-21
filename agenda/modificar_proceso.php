
<?php
include("conexion.php");
   $id=$_REQUEST['id'];
   $nombre=$_POST['nombre'];
   $apellidos=$_POST['apellidos'];
   $fecha=$_POST['fecha'];
   $domicilio=$_POST['domicilio'];

   $query="UPDATE contacto SET nombre='$nombre',apellidos='$apellidos',
   fecha='$fecha',domicilio='$domicilio' WHERE id ='$id'";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>