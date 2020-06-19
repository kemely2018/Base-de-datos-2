<!DOCTYPE html>
<html>
<head>
	<title>Modificar Email</title>
</head>
<body>
	<center>
			<?php

			  $id =$_REQUEST['id'];  

			  include("conexion.php");

			  $query="SELECT * FROM email WHERE ide='$id'";
			  $resultado=$conexion->query($query);
			  $row=$resultado->fetch_assoc();
			?>
		<form action="modificar_proceso_email.php?ide=<?php echo $row['ide']; ?>&ema=<?php echo $row['email']; ?>" method="POST">
            <p>E-mail: <input type="email" required name="email"   size="40" value="<?php echo $row['email']; ?>"></p>
			<p>Tipo: <input type="text" required name="tipoe" size="40" value="<?php echo $row['tipoe']; ?>"></p>
			<p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			</p>

		</form>
	</center>
</body>
</html>