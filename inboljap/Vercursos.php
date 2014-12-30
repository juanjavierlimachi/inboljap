<html>
<head>
	<meta charset="utf-8"/>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylo.css">
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript">
	
	</script>
	<style type="text/css">
	#checkbock{
		width: 300px;
		margin: auto;
		margin-top: 40px;
		border: 1px solid #045;
	}
	</style>
</head>
<body>


<?php
require('registros.html');
?>
</body>
</html>
<?php
require('conex.php');
//$alumnos="SELECT id FROM alumno";
//$alumno=$mysqli->query($alumnos);

$query="SELECT id, nombre_curso FROM curso";
$resultado=$mysqli->query($query);
?>


<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/matcurso.css">
		<style type="text/css">
		#menus a{
			display: none;
		}
		</style>
	</head>
	<body><br>
		
		<h2>Nomina De Curso</h2>

		
		<div id="datos">
			<table id="da">
			<thead>
				<tr>
					<td>ID</td>
					<td>Curso</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc())
					{ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['nombre_curso'];?>
							</td>
							
						<div id="menus">
									<td>
								<a href="alumnosver.php?id=<?php echo $row['id'];?>">Ver Alumnos</a>
							</td>
							<td>
								<a href="reportes.php?id=<?php echo $row['id'];?>">Imprimir</a>
							</td>
							<td>
								<a href="EliminarCurso.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</div>	
							
						</tr>
					  <?php
					} /**/
					?>
				</tbody>
			</table>
		</div>
		</body>
	</html>	

