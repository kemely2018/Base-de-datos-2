<?php
include("conexion.php");
   $idt=$_REQUEST['idt'];
   $telefono=$_POST['telefono'];
   $tipot=$_POST['tipot'];

   $query="INSERT INTO telefono(idt,telefono,tipot)
   VALUES('$idt','$telefono','$tipot')";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>