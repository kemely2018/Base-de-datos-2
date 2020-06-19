<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="formulario.css">
	<title>CREAR E-MAIL</title>
</head>
<body>

	<div class="contain">

		 <div class="wrapper">
		 	
		 	<div class="emailimagen">
             <h3>CREAR EMAIL ✉</h3>
             </div>

	  <center>

		<?php $ide=$_REQUEST['ide'];?>
		<form action="proceso_formu_email.php?ide=<?php echo $ide ?>" method="POST">
			<p>E-mail: <input type="email" required name="email"  
				placeholder="Email..." size="40" required value=""></p>
		    
			<select name="tipoe" id="tipoe">
					<option value="Trabajo">Trabajo</option>
					<option value="Particular">Particular</option>
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