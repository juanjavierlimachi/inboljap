<?php
	require('conex.php');

	$c=$_POST['materia'];
	$INS="INSERT INTO materia (nombre_materia) VALUES ('$c')";
	
	$resul=$mysqli->query($INS);
	
//	$query="SELECT * FROM curso";
	
//	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>cursos</title>
	</head>
	<body>
		
			<center>	
			
			<?php if($resul>0){ 

				echo"<script type=\"text/javascript\"> window.location='VerMaterias.php';</script>";
				?>
				 
				<?php }else
				{ echo"<script type=\"text/javascript\">alert('Error'); window.location='RegistroMaterias.php';</script>";
					?>
				 		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
			</center>
		
		</body>
	</html>	