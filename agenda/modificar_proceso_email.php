<?php
include("conexion.php");
   $ide=$_REQUEST['ide'];
   $ema=$_REQUEST['ema'];
   $email=$_POST['email'];
   $tipoe=$_POST['tipoe'];

   $query="UPDATE email SET email='$email',
   tipoe='$tipoe' WHERE ide='$ide' AND email='$ema' ";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>