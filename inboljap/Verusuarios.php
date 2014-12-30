<?php
require('registros.html');
require('conex.php');	

	$query="SELECT * FROM usuario";
	$resultado=$mysqli->query($query);
?>


<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/tables.css">
	</head>
	<body><br>
	<style type="text/css">
		#lesft{
			display: none;
		}
		#resft{
			display: none;
		}
		</style>		
		<h2>Usuarios Registrados</h2>
		
		
		<div id="datos">
			<table id="da">
			<thead>
				<tr>
					<td>ID</td>
					<td>Usuario</td>
					<td>Fecha de registro</td>
					
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc())
					{ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['user'];?>
							</td>
							<td>
								<?php echo $row['fecha_registro'];?>
							</td>
						
							<td>
								<a href="aliminarUser.php?id=<?php echo $row['id'];?>">Eliminar</a>
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
