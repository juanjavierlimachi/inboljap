<?php
require('conex.php');
$id=$_GET['id'];
$query="DELETE FROM materia WHERE id='$id'";
	$resultado=$mysqli->query($query);

?>
			<?php 
				if($resultado>0){

					echo"<script type=\"text/javascript\"> window.location='VerMaterias.php';</script>";
				
					}else
					{
				echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='VerMaterias.php';</script>";
				}
			 ?>
