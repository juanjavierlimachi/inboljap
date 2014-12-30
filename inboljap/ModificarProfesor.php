<?php
	
	require('conex.php');
	require('registros.html');
	$id=$_GET['id'];
	
	$query="SELECT nombre,apellido_paterno,apellido_materno,ci,direccion,telefono,fecha_registro FROM profesor WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Modificar Usuario</h1></center>
		
		<form name="" method="POST" action="ProfesorActual.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>NOMBRE</b></td>
					<td width="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>APELLIDO PATERNO</b></td>
					<td><input type="text" name="pa" size="25" value="<?php echo $row['apellido_paterno']; ?>" /></td>
				</tr>
				<tr>
					<td><b>APELLIDO MATERNO</b></td>
					<td><input type="text" name="ma" size="25" value="<?php echo $row['apellido_materno']; ?>" /></td>
				</tr>

				<tr>
					<td><b>CI</b></td>
					<td><input type="text" name="ci" size="25" value="<?php echo $row['ci']; ?>" /></td>
				</tr>
				<tr>
					<td><b>DIRECCION</b></td>
					<td><input type="text" name="dir" size="25" value="<?php echo $row['direccion']; ?>" /></td>
				</tr>
				<tr>
					<td><b>TELEFONO</b></td>
					<td><input type="text" name="tel" size="25" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	