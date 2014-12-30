<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/stylo.css">
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

$query="SELECT * FROM materia";
$resultado=$mysqli->query($query);
?>

<html>
	<head>
		<title>Materias</title>
		<link rel="stylesheet" type="text/css" href="css/matcurso.css">
	</head>
	<body><br>
		
		<h2>Nomina De Materias</h2>

		
		<div id="datos">
			<table id="da">
			<thead>
				<tr>
					<td>ID</td>
					<td>Materia</td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc())
					{ ?>
						<tr>
							<td><?php echo $row['id'];?>
							</td>
							<td>
								<?php echo $row['nombre_materia'];?>
							</td>
							
							<td>
								<a href="EliminarMat.php?id=<?php echo $row['id'];?>">Eliminar</a>
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
