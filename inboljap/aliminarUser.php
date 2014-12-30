<?php 
	
	require('conex.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM usuario WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar usuario</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
					echo"<script type=\"text/javascript\"> window.location='Verusuarios.php';</script>";

					}else{
				echo"<script type=\"text/javascript\"> window.location='Verusuarios.php';</script>";
				} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>