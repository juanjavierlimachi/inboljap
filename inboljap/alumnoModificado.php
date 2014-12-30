<?php 
	
	require('conex.php');
	require('registros.html');
	$id=$_POST['id'];
	$usuario=$_POST['nombre'];
	$pa=$_POST['pa'];
	$ma=$_POST['ma'];

	$ci=$_POST['ci'];
	$cur=$_POST['cur'];

	$dir=$_POST['dir'];
	$tel=$_POST['tel'];
	
	$query="UPDATE alumno SET nombre='$usuario', apellido_paterno='$pa', apellido_materno='$ma', ci='$ci', curso='$cur',direccion='$dir',telefono='$tel' 
	 WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
					echo"<script type=\"text/javascript\"> window.location='Vercursos.php';</script>";
					//<a href="alumnosver.php?id=<?php echo $row['id'];?>">Ver Alumnos</a>
				?>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>