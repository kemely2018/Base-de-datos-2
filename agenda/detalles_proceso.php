
<?php
include("conexion.php");
   $id=$_REQUEST['id'];


   $query="SELECT nombre,apellidos,fecha,domicilio,telefono,tipot, email ,tipoe 
           from contacto c
           LEFT JOIN telefono t ON c.id = t.idt
           LEFT JOIN email e ON c.id = e.ide
           WHERE c.id ='$id'";

   $resultado=$conexion->query($query);

?>