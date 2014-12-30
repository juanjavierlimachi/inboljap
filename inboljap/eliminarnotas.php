<?php
$id=$_GET['id'];
require('conex.php');
$sql="DELETE FROM bimestre1 WHERE id='$id'";
$resultado=$mysqli->query($sql);

if($resultado>0){
	echo"<script type=\"text/javascript\">alert('Nota Eliminada correntamente'); window.location='Vercursos.php';</script>";
		}else
			{
			echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='Vercursos.php';</script>";
			}

?>