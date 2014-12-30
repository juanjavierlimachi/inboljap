<?php
	
require('conex.php');

	$usuario=$_POST['nombre'];

	$pas=$_POST['password'];
	$repas=$_POST['repassword'];

	if($pas == $repas){
		$query="INSERT INTO usuario (user, pass)
	 VALUES ('$usuario','$pas')";
	 $resultado=$mysqli->query($query);

			 if($resultado>0){ 
				echo"<script type=\"text/javascript\"> window.location='crearUsuario.php';</script>";
				}else
				{ 
				
			echo"<script type=\"text/javascript\">alert('error'); window.location='crearUsuario.php';</script>";		
				}
	}	
	else{
		echo"<script type=\"text/javascript\">alert('Contraceña no coinside'); window.location='crearUsuario.php';</script>";
	}
			
?>