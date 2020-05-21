<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulario.css">
	<title>CREAR CONTACTO</title>
</head>
<body>

	<div class="contain">

		 <div class="wrapper">
		 	
		 	<div class="contacts">
             <h3>CREAR CONTACTO 📄</h3>
             </div>

	    <center>

		<form action="operacion_enviar.php" method="POST">
			<p>Nombre: <input type="text" required name="nombre"  
				placeholder="Nombre..." size="40" required value=""></p>
			<p>Apellidos: <input type="text" required name="apellidos" 
				placeholder="Apellidos..." size="40" required value=""></p>
			<p>Fecha de nacimiento: <input type="date" required name="fecha" 
				placeholder="Fecha Nacimiento..." size="40" value=""></p>
			<p>Domicilio: <input type="text" name="domicilio" 
				placeholder="Domicilio..." size="40" value=""></p>
			<p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			</p>
			<p>
				<input type="button" onclick="location.href='tabla.php'" class="boton_2" value="VER CONTACTOS">
			</p>

		</form>
	    </center>
	 </div>

	</div>
</body>
</html>