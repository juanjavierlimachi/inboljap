<?php 
	
	require('conex.php');
	
	$id=$_GET['id'];
	
	$query="DELETE FROM profesor WHERE id='$id'";
	
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

					echo"<script type=\"text/javascript\"> window.location='VerProfesores.php';</script>";
				
		
				
					}else{
				echo"<script type=\"text/javascript\">alert('Error Al Eliminar'); window.location='VerProfesores.php';</script>";
				
				
				} ?>
			<p></p>		
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>