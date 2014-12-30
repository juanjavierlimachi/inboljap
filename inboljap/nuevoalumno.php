<?php 
	
	require('conex.php');
	
	$usuario=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];

	$ci=$_POST['ci'];

	$curso=$_POST['curso'];/*este es el nombre del select*/

	$direc=$_POST['direc'];
	$tel=$_POST['tel'];

	$dia=$_POST['dia'];
	$mes=$_POST['mes'];
	$anio=$_POST['anio'];
	$nac="$anio-$mes-$dia";
	//echo $nac;
	if (!empty($usuario)&&!empty($paterno)&&!empty($materno)&&!empty($ci)&&!empty($curso)&&!empty($direc)) {
		$query="INSERT INTO alumno (nombre,apellido_paterno,apellido_materno,ci,curso,direccion,telefono,nac) 
			VALUES ('$usuario','$paterno','$materno',$ci,$curso, '$direc', $tel,'$nac')";
			
			$resultado=$mysqli->query($query);
			
					if($resultado>0)
					{
					 echo "<script type=\"text/javascript\">alert('Alumno Registrado Correctamente'); window.location='registroAlumno.php';</script>";

					}
					else
					{
						echo"<script type=\"text/javascript\">alert('Error verifique por favor'); window.location='registroAlumno.php';</script>";	
					}
			}
		else{
			echo"<script type=\"text/javascript\">alert('Error Casilla En Blanco...!!!'); window.location='registroAlumno.php';</script>";	
		}
 ?>
				
			
