<?php
include("conexion.php");
  
   $nombre=$_POST['nombre'];
   $apellidos=$_POST['apellidos'];
   $fecha=$_POST['fecha'];
   $domicilio=$_POST['domicilio'];


   $query="INSERT INTO contacto(nombre,apellidos,fecha,domicilio)
   VALUES('$nombre','$apellidos','$fecha','$domicilio')";

   $resultado=$conexion->query($query);
   if ($resultado) {
   	header("Location: tabla.php");
   }
   else{
   	echo "MAL";
   }
?>