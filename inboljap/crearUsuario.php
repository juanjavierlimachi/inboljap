<?php
require('registros.html');
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<link rel="stylesheet" type="text/css" href="css/botones.css">
<script type="text/javascript">
	$(document).ready(function(){
		$('#user').blur(function(){
			 var dato=document.getElementById('user').value;
			//var dato=$("#user").value; no muestre

			if (dato=='') {
				$('input').focus(function(){
					$(this).css('outline-color','red');
				});
				//alert('Usuario no puede estar vacio');
			}
		});
	});
</script>
<h3>Crear Usuarios</h3>
<div id="registro">
	<br>
	<form id = "form"name="" action="nuevousuario.php" method="POST" >
		  <label> Nombre Usuario :</label> <input  id="user" name="nombre" type="text" onblur="validar(this)" /> 
		   <label>Password:</label> <input id="pass" name="password" type="password" onblur="validar(this)" />
		  <label> Confirmar: </label><input name="repassword" type="password" />
		   <input id="boton" name="ver" type="submit" value="Guardar" />
		</form>
</div>