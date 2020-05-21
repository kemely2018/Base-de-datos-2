
<?php
include("conexion.php");
   $idt=$_REQUEST['idt'];
   $telefono=$_POST['telefono'];
   $tipot=$_POST['tipot'];

   $query="UPDATE telefono SET telefono='$telefono',
   tipot='$tipot' WHERE idt='$idt'";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>