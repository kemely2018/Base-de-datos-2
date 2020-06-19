<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulario.css">
	<title>CREAR TELEFONO</title>
</head>
<body>

	<div class="contain">

		 <div class="wrapper">
		 	
		 	<div class="telef">
             <h3>CREAR TELEFONO 📞</h3>
             </div>

	  <center>

		<?php $idt=$_REQUEST['idt'];?>
		<form action="proceso_formu_telefono.php?idt=<?php echo $idt ?>" method="POST">
			<p>Telefono: <input type="number" required name="telefono"  
				placeholder="Telefono..." size="40" required value=""></p>
		    
			<select name="tipot" id="tipot">
					<option value="Trabajo Fijo">Trabajo Fijo</option>
					<option value="Trabajo móvil">Trabajo móvil</option>
					<option value="Particular Fijo">Particular Fijo</option>
					<option value="Particular móvil">Particular móvil</option>
			</select>
			</p>
			<p>
				<input type="submit" value="Enviar">
				<input type="reset" value="Borrar">
			</p>


		</form>
	    </center>
	 </div>

	</div>
</body>
</html>