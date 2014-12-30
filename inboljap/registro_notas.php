<?php
require('conex.php');
require('registros.html');

$id=$_GET['id'];
$alumno="SELECT * FROM alumno WHERE id='$id'";
$resultado=$mysqli->query($alumno);
while ($row=$resultado->fetch_assoc()) {echo "<br>";
	echo "ALUMNO:      ".$row['nombre']."                     ".$row['apellido_paterno']."                     ".$row['apellido_materno'];
?>  
<input type="button" value="Actualizar informacion" onClick="location.reload();" 
style="width: 150px; height: 18px; background: #6699FF; color: #ffffff; cursor: pointer; border: 0px;"/>
 <?php
}
$materia="SELECT * FROM materia";
$res=$mysqli->query($materia);

$mat2="SELECT * FROM materia";
$r=$mysqli->query($mat2);

$materia1="SELECT * FROM materia";
$resp=$mysqli->query($materia1);

$mat4="SELECT * FROM materia";
$repp=$mysqli->query($mat4);

$notas="SELECT * FROM bimestre1 WHERE id_alumno='$id'";
$resultanotas=$mysqli->query($notas);

$notas1="SELECT * FROM bimestre2 WHERE id_alumno='$id'";
$resultanotas1=$mysqli->query($notas1);

$notas2="SELECT * FROM bimestre3 WHERE id_alumno='$id'";
$resultanotas2=$mysqli->query($notas2);

$notas3="SELECT * FROM bimestre4 WHERE id_alumno='$id'";
$resultanotas3=$mysqli->query($notas3);

//para actualizar
$consul="SELECT * FROM curso";
$re=$mysqli->query($consul);
$consul1="SELECT * FROM curso";
$re1=$mysqli->query($consul1);
$consul2="SELECT * FROM curso";
$re2=$mysqli->query($consul2);
$consul3="SELECT * FROM curso";
$re3=$mysqli->query($consul3);
?>
<link rel="stylesheet" type="text/css" href="css/registro_notas.css">
<script type="text/javascript" src="js/notasB.js"></script><br>
<div id="bim" >
Bimestre 1.
</div>
<div id="bim1">
Bimestre 2.
</div>
<div id="bim2">
Bimestre 3.
</div>
<div id="bim3">
Bimestre 4.
</div>

<div id="notasFrom">
<div id="form">Nota del Bimestre 1.
	<form id="Formulario" action="" method="POST">
		<label>Nota:</label><input type="num" name="bimestre1">
		<label>Mteria</label> <select name="materia"><option>..................</option>
								<?php while ($row=$res->fetch_assoc()) {
									echo "<option value=".$row['id'].">".$row['nombre_materia']."</option>";
								}
								?>
					</select><br><br>
		<input type="submit" name="bimestre" value="Registrar">
		<br><br>
	</form>
	<!-- aki muestro las notas del alumno -->
	<?php
		while ($row=$resultanotas->fetch_assoc()) {
			?> <div id="n">
					<p>  <a title="Eliminar Nota" href="eliminarnotas.php?id=<?php echo $row['id'];?>">X</a>  <?php echo "Nota:".$row['nota1'];$mimateria=$row['id_materia']; 
							$mimat="SELECT nombre_materia FROM materia WHERE id='$mimateria'";
							$resulma=$mysqli->query($mimat);
							while ($row=$resulma->fetch_assoc()) {
								echo "materia:".$row['nombre_materia'];
							}
					?></p>
			</div>  <?php
		}
	?>
</div>


<div id="form1">Nota del Bimestre 2.
	<form id="Formulario" action="" method="POST">
		<label>Nota:</label><input type="num" name="nota2">
		<label>Mteria</label> <select name="materia"><option>..................</option>
								<?php while ($row=$r->fetch_assoc()) {
									echo "<option value=".$row['id'].">".$row['nombre_materia']."</option>";
								}
								?>
					</select><br><br>
		<input type="submit" name="bimestre2" value="Registrar">
		<br><br>
	</form>
	<!-- aki muestro lis notas del alumno -->
	<?php
		while ($row=$resultanotas1->fetch_assoc()) {
			?> <div id="n">
					<p> <a title="Eliminar Nota" href="eliminarnotas2.php?id=<?php echo $row['id'];?>">X</a><?php echo "Nota:".$row['nota2'];$mimateria=$row['id_materia']; 
							$mimat="SELECT nombre_materia FROM materia WHERE id='$mimateria'";
							$resulma=$mysqli->query($mimat);
							while ($row=$resulma->fetch_assoc()) {
								echo "materia:".$row['nombre_materia'];
							}
					?></p>
			</div>  <?php
		}
	?>
</div>
<div id="form2">Nota del Bimestre 3.
	<form id="Formulario" action="" method="POST">
		<label>Nota:</label><input type="num" name="nota3">
		<label>Mteria</label> <select name="materia"><option>..................</option>
								<?php while ($row=$resp->fetch_assoc()) {
									echo "<option value=".$row['id'].">".$row['nombre_materia']."</option>";
								}
								?>
					</select><br><br>
		<input type="submit" name="bimestre3" value="Registrar">
		<br><br>
	</form>
	<!-- aki muestro lis notas del alumno -->
	<?php
		while ($row=$resultanotas2->fetch_assoc()) {
			?> <div id="n">
					<p> <a title="Eliminar Nota" href="eliminarnotas3.php?id=<?php echo $row['id'];?>">X</a><?php echo "Nota:".$row['nota3'];$mimateria=$row['id_materia']; 
							$mimat="SELECT nombre_materia FROM materia WHERE id='$mimateria'";
							$resulma=$mysqli->query($mimat);
							while ($row=$resulma->fetch_assoc()) {
								echo "materia:".$row['nombre_materia'];
							}
					?></p>
			</div>  <?php
		}
	?>
</div>
<div id="form3">Nota del Bimestre 4.
	<form id="Formulario" action="" method="POST">
		<label>Nota:</label><input type="num" name="nota4">
		<label>Materia</label> <select name="materia"><option>..................</option>
								<?php while ($row=$repp->fetch_assoc()) {
									echo "<option value=".$row['id'].">".$row['nombre_materia']."</option>";
								}
								?>
					</select><br><br>
		<input type="submit" name="bimestre4" value="Registrar">
		<br><br>
	</form>
	<!-- aki muestro lis notas del alumno -->
	<?php
		while ($row=$resultanotas3->fetch_assoc()) {
			?> <div id="n">
					<p> <a title="Eliminar Nota" href="eliminarnotas4.php?id=<?php echo $row['id'];?>">X</a><?php echo "Nota:".$row['nota4'];$mimateria=$row['id_materia']; 
							$mimat="SELECT nombre_materia FROM materia WHERE id='$mimateria'";
							$resulma=$mysqli->query($mimat);
							while ($row=$resulma->fetch_assoc()) {
								echo "materia:".$row['nombre_materia'];							}
					?></p>
			</div>  <?php
		}
	?>
</div>
</div>
<?php
if (isset($_POST['bimestre'])) {
		$nota=$_POST['bimestre1'];
		$id=$_GET['id'];
		$materia=$_POST['materia'];
		//echo $materia;
		$sql="SELECT * FROM bimestre1 WHERE id_alumno='$id'";
		$consulta=$mysqli->query($sql);

		if ($nota>100 || empty($nota)){
			echo "Error: La nota no deve Pasar de Los 100 Puntos O dejo la casilla vacio";
		}

		else{
				$aux=0;
				$cont=0;
				while ($row=$consulta->fetch_assoc()) {
					$aux=$row['id_materia'];
					if ($materia==$aux) {
						$cont++;
						echo "Ya esta registrado";
						 break;
						}
					}
					if ($cont==0) {
						$insertar="INSERT INTO bimestre1(nota1,id_alumno,id_materia)  VALUES($nota,$id,$materia)";
						$rep=$mysqli->query($insertar);
						if($rep>0)
						 { ?>
							<div id="info">
								<h3><p><?php echo "Registro Guardado con Existo el alumno Tiene una nota total de:".$nota;?></p></h3>
							</div>
						<?php }else
							{ ?>
							<h3><?php  echo"Error al Registrar los datos !!!";?></h3>	 		
						<?php	} 
					}

				}
}
if (isset($_POST['bimestre2'])) {
		$nota=$_POST['nota2'];
		$id=$_GET['id'];
		$materia=$_POST['materia'];


		$sql="SELECT * FROM bimestre2 WHERE id_alumno='$id'";
		$consulta=$mysqli->query($sql);
		if ($nota>100 || empty($nota)){
			echo "Error: La nota no deve Pasar de Los 100 Puntos O dejo la casilla vacio";
		}

		else{
				$aux=0;
				$cont=0;
				while ($row=$consulta->fetch_assoc()) {
					$aux=$row['id_materia'];
					if ($materia==$aux) {
						$cont++;
						echo "Ya esta registrado";
						 break;
						}
					}
					if ($cont==0) {
						$insertar="INSERT INTO bimestre2 (nota2,id_alumno,id_materia)  VALUES($nota,$id,$materia)";
						$rep=$mysqli->query($insertar);
						if($rep>0)
						 { ?>
							<div id="info">
								<h3><p><?php echo "Registro Guardado con Existo el alumno Tiene una nota total de:".$nota;?></p></h3>
							</div>
						<?php }else
							{ ?>
							<h3><?php  echo"Error al Registrar los datos !!!";?></h3>	 		
						<?php	} 
					}

				}
}

if (isset($_POST['bimestre3'])) {
		$nota=$_POST['nota3'];
		$id=$_GET['id'];
		$materia=$_POST['materia'];
		$sql="SELECT * FROM bimestre3 WHERE id_alumno='$id'";
		$consulta=$mysqli->query($sql);
		if ($nota>100 || empty($nota)){
			echo "Error: La nota no deve Pasar de Los 100 Puntos O dejo la casilla vacio";
		}

		else{
				$aux=0;
				$cont=0;
				while ($row=$consulta->fetch_assoc()) {
					$aux=$row['id_materia'];
					if ($materia==$aux) {
						$cont++;
						echo "Ya esta registrado";
						 break;
						}
					}
					if ($cont==0) {
						$insertar="INSERT INTO bimestre3 (nota3,id_alumno,id_materia)  VALUES($nota,$id,$materia)";
						$rep=$mysqli->query($insertar);
						if($rep>0)
						 { ?>
							<div id="info">
								<h3><p><?php echo "Registro Guardado con Existo el alumno Tiene una nota total de:".$nota;?></p></h3>
							</div>
						<?php }else
							{ ?>
							<h3><?php  echo"Error al Registrar los datos !!!";?></h3>	 		
						<?php	} 
					}

				}
}
if (isset($_POST['bimestre4'])) {
		$nota=$_POST['nota4'];
		$id=$_GET['id'];
		$materia=$_POST['materia'];
		$sql="SELECT * FROM bimestre4 WHERE id_alumno='$id'";
		$consulta=$mysqli->query($sql);
		if ($nota>100 || empty($nota)){
			echo "Error: La nota no deve Pasar de Los 100 Puntos O dejo la casilla vacio";
		}

		else{
				$aux=0;
				$cont=0;
				while ($row=$consulta->fetch_assoc()) {
					$aux=$row['id_materia'];
					if ($materia==$aux) {
						$cont++;
						echo "Ya esta registrado";
						 break;
						}
					}
					if ($cont==0) {
						$insertar="INSERT INTO bimestre4 (nota4,id_alumno,id_materia)  VALUES($nota,$id,$materia)";
						$rep=$mysqli->query($insertar);
						if($rep>0)
						 { ?>
							<div id="info">
								<h3><p><?php echo "Registro Guardado con Existo el alumno Tiene una nota total de:".$nota;?></p></h3>
							</div>
						<?php }else
							{ ?>
							<h3><?php  echo"Error al Registrar los datos !!!";?></h3>	 		
						<?php	} 
					}

				}
}

?>
