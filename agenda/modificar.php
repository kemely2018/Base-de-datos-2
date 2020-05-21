<!DOCTYPE html>
<html>
<head>
	<title>Modificar datos </title>
</head>
<body>
	<center>
			<?php

			  $id =$_REQUEST['id'];  

			  include("conexion.php");

			  $query="SELECT * FROM contacto WHERE id='$id'";
			  $resultado=$conexion->query($query);
			  $row=$resultado->fetch_assoc();
			?>
		<form action="modificar_proceso.php?id=<?php echo $row['id']; ?>" method="POST">
            <p>Nombre: <input type="text" required name="nombre"  placeholder="Nombre..." size="40" value="<?php echo $row['nombre']; ?>"></p>
			<p>Apellidos: <input type="text" required name="apellidos" placeholder="Apellidos..." 
				size="40" value="<?php echo $row['apellidos']; ?>"></p>
			<p>Fecha de nacimiento: <input type="date" required name="fecha" placeholder="Fecha Nacimiento..." 
				size="40" value="<?php echo $row['fecha']; ?>"></p>
			<p>Domicilio: <input type="text" name="domicilio" placeholder="Domicilio..." size="40" value="<?php echo $row['domicilio']; ?>"></p>
			<p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			</p>

		</form>
	</center>
</body>
</html>