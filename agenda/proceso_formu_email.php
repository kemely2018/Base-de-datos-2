<?php
include("conexion.php");
   $ide=$_REQUEST['ide'];
   $email=$_POST['email'];
   $tipoe=$_POST['tipoe'];

   $query="INSERT INTO email(ide,email,tipoe)
   VALUES('$ide','$email','$tipoe')";
   $resultado=$conexion->query($query);
   if ($resultado) {
      header("Location: tabla.php");
   }
   else{
      echo "Insercion no exitosa";
   }
?>