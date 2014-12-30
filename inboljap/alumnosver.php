<?php
	require('conex.php');
	require('registros.html');
	//$da=$_POST['dato'];
	$id=$_GET['id'];
	$query="SELECT id,nombre ,apellido_paterno, apellido_materno, ci, direccion, telefono, fecha_de_registro, nac FROM alumno WHERE curso='$id'";
	$resultado=$mysqli->query($query);
	$sql="SELECT id,nombre_curso FROM curso WHERE id='$id'";
	$resp=$mysqli->query($sql)	
?>
<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/tables.css">
		<style type="text/css">
		#lesft{
			display: none;
		}
		#resft{
			display: none;
		}
		</style>
	</head>
	<body><br>
		<?php	
		while($row=$resp->fetch_assoc()) {
		echo "Alumnos del Curso:".$row['nombre_curso'];  
		/*si ago aki la consulta es error de sintaxis*/	
		}
		?>
		<div id="datos">
			<table id="da">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Apellido Paterno</td>
					<td>Apellido Materno</td>
					<td>CI</td>
					<td>Direccion</td>
					<td>Telefono</td>
					<td>fecha y hora de Reg:</td>
					<td>fecha Nac:</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc())
					{ ?>
						<tr>
							<td><?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['apellido_paterno'];?>
							</td>
							<td>
								<?php echo $row['apellido_materno'];?>
							</td>
							<td>
								<?php echo $row['ci'];?>
							</td>	
							<td>
								<?php echo $row['direccion'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['fecha_de_registro'];?>
							</td>
							<td>
								<?php echo $row['nac'];?>
							</td>
							<td>
								<a href="registro_notas.php?id=<?php echo $row['id'];?>">Ver Nota</a>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminarAlumno.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					  <?php
					} 
					?>
				</tbody>
			</table>
		</div>
		</body>
	</html>	