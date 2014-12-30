<?php
	require('registros.html');
?>
<style type="text/css">
	#contenido{
		width: 45%;
		height: 100px;
		margin-left: 380px;
		background-color:blue;
		border-radius: 10px;
		margin-top: 20px;
		text-align: center;
		color: white;
	}
	#sub{
		width: 50%;
		margin: auto;
		float: left;
	}
</style>
<div id="contenido">
<form id="sub" method="POST" action="multimedia.php" enctype="multipart/form-data">
	<h2>Subir Archivos</h2>
	<input type="file" name="archivo" /><br><br>
	<input type="submit" value="subir archivo" name="boton">
</form>
<form id="sub" method="GET" action="eliminarArchivos.php" enctype="multipart/form-data">
	<h2>Eliminar Archivo</h2>
	<input type="file" name="archivo" /><br><br>
	<input type="submit" value="Eliminar Archivo" name="boton">
</form>
</div>