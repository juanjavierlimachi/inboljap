<?php
	require('conex.php');

	$c=$_POST['curso'];
	$INS="INSERT INTO curso (nombre_curso) VALUES ('$c')";
	
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

				echo"<script type=\"text/javascript\"> window.location='Vercursos.php';</script>";
				?>
				 
				<?php }else
				{ echo"<script type=\"text/javascript\"> window.location='registro.html';</script>";
					?>
				 		
			<?php	} ?>
			
			</center>
		
		</body>
	</html>	