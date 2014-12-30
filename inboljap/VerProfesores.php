<link rel="stylesheet" type="text/css" href="css/tables.css">
<?php
require('registros.html');
require('conex.php');
$query="SELECT * FROM profesor";		
$resultado=$mysqli->query($query);
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
		
		<h2>Nomina de docentes Registrados</h2>

		
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
					<td>fecha y hora Registro</td>
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
								<?php echo $row['fecha_registro'];?>
							</td>
							<td>
								<a href="ModificarProfesor.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="aliminarProfesor.php?id=<?php echo $row['id'];?>">Eliminar</a>
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

