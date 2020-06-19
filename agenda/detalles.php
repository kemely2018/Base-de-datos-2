<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="detalles.css">
	<title>Detalles </title>
</head>
<body>
	<center>

			<?php

			  $id =$_REQUEST['id'];  

			  include("conexion.php");

			  $arrOutput=array();
			  $query="SELECT nombre,apellidos,fecha,domicilio
                       FROM contacto
                       WHERE id ='$id'";
              $consulta= $conexion->query($query);
              $row=$consulta->fetch_assoc();

            ?>
            <p>Nombre: <?php echo $row['nombre']; ?> </p>
            <p>Apellido : <?php echo $row['apellidos']; ?></p>
            <p>Fecha Cumpleaños 🎁 : <?php echo $row['fecha']; ?></p>
            <p>Domicilio🏠 : <?php echo $row['domicilio']; ?> </p>
            <p>Telefono ☎ :<br></p>
            <?php

              $query2="SELECT idt,telefono,tipot from telefono
              WHERE idt ='$id'";
              
              $consulta1= $conexion->query($query2);
              while($fila=$consulta1->fetch_assoc()){
            ?>

            <p> <?php echo $fila['telefono']; ?>&nbsp &nbsp <?php echo $fila['tipot']; ?></p>      
  
            <a href="modificar_tele.php?id=<?php echo $fila['idt']; ?>">Modificar</a><br/><br/>

           
            <?php   
                
               }

             echo  $id;

            ?>



             <a href="formu_insertar_telefono.php?idt=<?php echo $id ?>">Agregar</a><br/><br/>
            
            <p>E-mail✉ :<br></p>

            <?php

              $query3="SELECT ide,email,tipoe from email
                       WHERE ide ='$id'";
              
              $consulta2= $conexion->query($query3);
              while($filas=$consulta2->fetch_assoc()){
           

			       ?>

			       <p> <?php echo $filas['email']; ?>&nbsp &nbsp <?php echo $filas['tipoe']; ?></p>
		
             <a href="modificar_email.php?id=<?php echo $filas['ide']; ?>">Modificar</a><br/><br/>
      
			       <?php
			         }
			       ?>
		     
             <a href="formu_insertar_email.php?ide=<?php echo $id ?>">Agregar</a><br/><br/>
			
	
            </div>
            </center>
		    </form>
	</center>
   </body>
</html>