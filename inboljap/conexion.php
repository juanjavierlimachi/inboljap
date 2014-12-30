<?php
$conexion=mysql_connect("localhost","root","");
  if(!$conexion){
  die("fallo en la conexion a la base de datos".mysql_error());
  }
	$basedatos=mysql_select_db("inboljap", $conexion);
	if(!$basedatos){
	 die("fallo en la coneccion a la base de datos".mysql_error());
	 }

?>