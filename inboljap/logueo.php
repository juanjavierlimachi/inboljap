<?php
require('conexion.php');


	 $dato=$_POST['user'];
	 $pas=$_POST['clave'];


	 $consulta=mysql_query("SELECT * FROM usuario WHERE user=('{$dato}') AND pass=('{$pas}');");
	$basedatos=mysql_select_db("inboljap", $conexion);
	 //echo $consulta;
	if (mysql_num_rows($consulta) >= 1){
	
	echo"<script type=\"text/javascript\"> window.location='registros.html';</script>";
	}
	else
	{
		echo"<script type=\"text/javascript\">alert('ERROR AL INGRESAR INTENTE NUEVAMENTE'); window.location='index.html';</script>";
	}
?>