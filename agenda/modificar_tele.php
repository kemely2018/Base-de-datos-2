<!DOCTYPE html>
<html>
<head>
	<title>Modificar Telefono</title>
</head>
<body>
	<center>
			<?php

			  $id =$_REQUEST['id'];  

			  include("conexion.php");

			  $query="SELECT * FROM telefono WHERE idt='$id'";
			  $resultado=$conexion->query($query);
			  $row=$resultado->fetch_assoc();
			?>
		<form action="proceso_modificar_tele.php?idt=<?php echo $row['idt']; ?>" method="POST">
            <p>Telefono: <input type="number" required name="telefono"  placeholder="Telefono..." size="40" value="<?php echo $row['telefono']; ?>"></p>
			<p>Tipo: <input type="text" required name="tipot" placeholder="Tipo de telefono..." 
				size="40" value="<?php echo $row['tipot']; ?>"></p>
			<p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			</p>

		</form>
	</center>
</body>
</html>