
<?php
require('registros.html');
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<link rel="stylesheet" type="text/css" href="css/botones.css">
<h3>Registro Personal</h3>
<div id="registro"><br>
	
	<form id = "form"name="" action="nuevoProfesor.php" method="POST" >
		 <label>Nombre :</label> <input name="nombre" type="text"/> 
		 <label>Apellido Paterno:</label>  <input name="paterno" type="text" />
		   <label>Apellido Materno: </label><input name="materno" type="text" />
		  <label>ci: </label><input name="ci" type="text"/> 
		  <label>Direccion: </label><input name="direc" type="text"/> 
		  <label>Telefono:</label> <input name="tel" type="text" />
		   <p><input id="boton" name="ver" type="submit" value="Guardar" /><input id="reset" name="ver" type="reset" value="Cancelar" /></p>
		</form>
</div>