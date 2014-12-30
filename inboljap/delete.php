<?php
require('conex.php');
$id=$_GET['id'];
$query="DELETE FROM nota WHERE id='$id'";
	$resultado=$mysqli->query($query);
if($resultado>0){

			echo"<script type=\"text/javascript\">alert('Registro Eliminardo Correctamente');  window.location='Vercursos.php';</script>";
				
	}else
		{
		echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='Vercursos.php';</script>";
	} 
?>