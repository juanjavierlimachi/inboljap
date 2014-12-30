<?php
require('conex.php');
require('registros.html');
$alumno=$_GET['id'];
/*echo $alumno."<br>";RECUPERO EL ID DEL ALUMNO*/
$consul="SELECT * FROM curso";
$re=$mysqli->query($consul);
$query="SELECT nombre, apellido_paterno,apellido_materno FROM alumno WHERE id='$alumno'";
$resultado=$mysqli->query($query);
$minota="SELECT id, bimestre1, bimestre2, bimestre3, bimestre4, total, id_materia FROM nota WHERE id_alumno='$alumno'";

$ver=$mysqli->query($minota);
while ($row=$resultado->fetch_assoc()) { echo "<br>";
	echo "ALUMNO :      ".$row['nombre']."                           ".
		$row['apellido_paterno']."                                ".
			$row['apellido_materno']."";
 ?>

<?php 
while ($row=$ver->fetch_assoc()) {
 	echo "BISMESTRE1....".$row['bimestre1']."....";
 	echo "BISMESTRE2....".$row['bimestre2']."....";
 	echo "BISMESTRE3.....".$row['bimestre3']."....";
 	echo "BISMESTRE4....".$row['bimestre4']."....";  ?>||  <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar Nota</a><?php
 	 $t=$row['total'];
 	 if ($t<51) {?>
 	 	<h5><?php echo "Total:                      ".$row['total']."...El alumno Tiene nota de Reprovamiento en la materia de:            ";
 	 	$laMateria=$row['id_materia'];
 	 	$view="SELECT nombre_materia FROM materia WHERE id='$laMateria'";
 	 	$sep=$mysqli->query($view);
 	 	while ($row=$sep->fetch_assoc()) {
 	 		echo $row['nombre_materia']; 
 	 	}
 	 	?></h5>
 	 	<?php
 	 }
 	 else{ ?>
 	 	<h5><p><?php echo "El alumno Aprobo con una nota de:    ".$row['total']."     en la materia de:             ";
 	 	$laMateria=$row['id_materia'];
 	 	$view="SELECT nombre_materia FROM materia WHERE id='$laMateria'";
 	 	$sep=$mysqli->query($view);
 	 	while ($row=$sep->fetch_assoc()) {
 	 		echo $row['nombre_materia'];
 	 	}
 	 	echo $row['total'];?></p></h5>  
 	 	<?php
 	 }
 } 
?>
	<div id="not"><form method="POST"><a href="#" id="verForm">AGREGAR NOTA</a>
		|NOTAS:<select name="notas" onchange='submit()'><option>Seleccione Curso</option>
		<?php while ($row=$re->fetch_assoc()) { ?>
			<option value="<?php echo $row['id'];?>"><?php echo $row['nombre_curso'];?></option>
		 <?php
		 }	?>
</select></form></div>
<?php
}

$consulta="SELECT * FROM materia";
$re=$mysqli->query($consulta);
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<link rel="stylesheet" type="text/css" href="css/deNotas.css">
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#verForm').click(function(){
		 $("#nota").show(1000);
	});
});
</script>
<div id="nota"><h2>Registro de Notas</h2><br>
<form action="" method="POST" id="froms">
<label>1er. Bimestre</label><input type="number" name="uno"><br>
<label>2do. Bimestre</label><input type="number"  name="dos"><br>
<label>3ro. Bimestre</label><input type="number" name="tres"><br>
<label>4to. Bimestre</label><input type="number" name="cuatro"><br>
<label>Materia: </label><select name="mater"><option>..................................</option>
<?php while($row=$re->fetch_assoc()){?>
	<option value="<?php echo $row['id'];?>"><?php echo $row['nombre_materia'];?></option>
<?php
}
?>
</select><br>

<input id="btn" type="submit" name="guardar" value="Registrar Nota">
</form>
</div>
<?php
if (isset($_POST['guardar'])){

	$uno=($_POST['uno']*25)/100;
	$dos=($_POST['dos']*25)/100;
	$tres=($_POST['tres']*25/100);
	$cuatro=($_POST['cuatro']*25)/100;
	$total=$uno+$dos+$tres+$cuatro;
	$ma=$_POST['mater'];
	$alumno=$_GET['id'];
	/*echo $total;*/
	if($total>100){ 
	echo "<br>"
	;?>
		<h4><?php	echo "Error en procesar la nota. Cada casilla tienes una ponderacion de 25% Verifique por favor"; ?></h4>
	<?php
	}
	else{
		/*echo $alumno;*/
		if (!empty($uno)&&!empty($dos)&&!empty($tres)&&!empty($cuatro)) {
			# code...
		
		$insertar="INSERT INTO nota (bimestre1,bimestre2,bimestre3,bimestre4,total,id_materia,id_alumno)
		VALUES ($uno,$dos,$tres,$cuatro,$total,$ma,$alumno)";
		$rep=$mysqli->query($insertar);
		 if($rep>0)
		 { ?>
			<h3><p><?php echo "Registro Guardado con Existo el alumno Tiene una nota total de:".$total;?></p></h3>
		<?php }else
			{ ?>
			<h3><?php  echo"Error al Registrar los datos !!!";?></h3>	 		
		<?php	} 
		}
		else{
			?><h3><?php  echo"Error No puede registrar Canpos en Blanco !!!";?></h3><?php
		}
	}

}
?>
<?php 
if (isset($_POST['notas'])){
$id_cursos=$_POST['notas'];
$alumno=$_GET['id'];
$selectALUMNOS="SELECT nombre,apellido_paterno FROM alumno WHERE curso='$id_cursos'";
$rep=$mysqli->query($selectALUMNOS); 
$notasCurso="SELECT * FROM nota WHERE id_alumno='$alumno'";
$result=$mysqli->query($notasCurso);
?>
<table><?php
while ($row=$rep->fetch_assoc()) { ?>
<tr><td><?php /* echo $row['nombre']; */?></td><td><?php /* echo $row['apellido_paterno']; */?></td><td></td></tr><?php 
while ($row=$result->fetch_assoc()) {
	/*echo $row['total'];*/
?>
<?php
	}
}
?>
<?php
}
?>
</table>