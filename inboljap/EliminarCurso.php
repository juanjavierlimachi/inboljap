<?php
require('conex.php');
$id=$_GET['id'];
$query="DELETE FROM curso WHERE id='$id'";
	$resultado=$mysqli->query($query);

?>


			<?php 
				if($resultado>0){

					echo"<script type=\"text/javascript\"> window.location='Vercursos.php';</script>";
				
					}else
					{
				echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='Vercursos.php';</script>";
				}
			 ?>
