<?php
	
require('conex.php');
	$usuario=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$ci=$_POST['ci'];

	$direc=$_POST['direc'];
	$tel=$_POST['tel'];
	if (!empty($usuario)&&!empty($paterno)&&!empty($materno)&&!empty($direc)&&!empty($ci)&&!empty($tel))
	 {
			if (is_numeric($ci)&&is_numeric($tel)&&!is_numeric($usuario)&&!is_numeric($paterno)&&!is_numeric($materno))
				 {
							$query="INSERT INTO profesor (nombre,apellido_paterno,apellido_materno,ci,direccion,telefono)
							 VALUES ('$usuario','$paterno','$materno','$ci','$direc',$tel)";
						
								$resultado=$mysqli->query($query);

								if($resultado>0)
								{ 
											echo"<script type=\"text/javascript\">window.location='registroProfesor.php';</script>";
								}else
										{ 
											
											echo"<script type=\"text/javascript\">alert('error'); window.location='registroProfesor.php';</script>";		
										} 	
				}	
											
						
						else{ echo"<script type=\"text/javascript\">alert('Datos Incorectos...!!!'); window.location='registroProfesor.php';</script>";	 }
			}
			else
			{
					echo"<script type=\"text/javascript\">alert('Casillas en Blanco'); window.location='registroProfesor.php';</script>";	
			}	
?>