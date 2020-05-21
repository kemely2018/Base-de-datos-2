<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tabla.css">
	<title>Tabla</title>
</head>
<body>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th colspan="1"><a href="formulario.php">Nuevo 📄</a></th>
				    <th colspan="4">Lista de usuarios</th>
				</tr>
			</thead>
			<body>
				<tr>
					<td>Id</td>
					<td>Contacto</td>
					<td colspan="3">Operaciones</td>
				</tr>
			<?php
			  include("conexion.php");
			  $query="SELECT * FROM contacto";
			  $resultado=$conexion->query($query);
			  while($row=$resultado->fetch_assoc()) {
			?>
                <tr>
                	<td><?php echo $row['id']; ?></td>
                	<td><?php echo $row['nombre']; ?> <?php echo $row['apellidos']; ?></td>
                	<td><a href="detalles.php?id=<?php echo $row['id']; ?>">Detalles</a></td>
                	<td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                	<td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
                </tr>
            <?php
			  }
                
			?>
			</body>
		</table>
	</center>
</body>
</html>

