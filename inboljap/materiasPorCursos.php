<?php
require('conex.php');
$dato=$_GET['id'];
$eli="DELETE FROM curso_materia WHERE id_materia='$dato'";
$resultado=$mysqli->query($eli);

				if($resultado>0){

					echo"<script type=\"text/javascript\"> window.location='materiasCursos.php';</script>";
				
					}else
					{
				echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='materiasCursos';</script>";
				}

?>