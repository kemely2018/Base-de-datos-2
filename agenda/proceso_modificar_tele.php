
<?php
include("conexion.php");
   $idt=$_REQUEST['idt'];
   $telefono=$_REQUEST['telefono'];
   $tele=$_POST['tele'];
   $tipot=$_POST['tipot'];

   $query="UPDATE telefono SET telefono='$tele',
   tipot='$tipot' WHERE idt='$idt' AND telefono=$telefono";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>