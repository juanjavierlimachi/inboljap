<?php
require('registros.html');
require('conex.php');

$sql="SELECT * FROM curso";
$resultado=$mysqli->query($sql);

$consulta="SELECT * FROM materia";
$resp=$mysqli->query($consulta);
?>
<style type="text/css">
#mat{
	border: 1px solid #045;
	width: 400px;
	margin: auto;
	text-align: center;
	margin-top: 50px;
}
#nom{
	border: 1px solid #045;
	width: 400px;
	margin: auto;
 	text-align: left;
	margin-top: 50px;
}
#nom a{
	display: inline-block;
	margin-right: 0px;
}
</style>
<script type="text/javascript">
function Alerta(){
	var datos=document.getElementById("info").value;
	if(datos==0){
		alert('No selecciono el curso');
	}
}
</script>
<div id="mat">
	Asignar Materia a Cursos<br>
	<form method="POST" action="">
		<label>Curso: </label><select id="info" name="curso"><option value="0" id="info">.....................</option>
					<?php while ($row=$resultado->fetch_assoc()) { ?>
				  <option id="info" value="<?php echo $row['id'];?>" ><?php echo $row['nombre_curso'];?></option>
				  <?php
				  }
		  		?>
	</select>

	<label>Materia: </label><select id="nm" name="materia"><option  id="nm" value="0">.....................</option>
		<?php while ($row=$resp->fetch_assoc()) { ?>
		<option id="nm" value="<?php echo $row['id'];?>"><?php echo $row['nombre_materia'];?></option>
		<?php
	}
	?>
	</select><br><br>
	<input type="submit" name="verMaterias" value="Ver Materia Asignadas" onclick="Alerta();">
	<input type="submit" name="asignar" value="Asignar Materia">
	
	</form>
</div>
<?php
if (isset($_POST['asignar'])){
	$curso=$_POST['curso'];
	$materia=$_POST['materia'];
	/*aki tengo k insertar la variable $curso a la tabla curso_materia jejeej*/
	/*$con="SELECT nombre_curso FROM curso WHERE id='$curso'";
	$r=$mysqli->query($con);

	while ($row=$r->fetch_assoc()){
		echo $row['nombre_curso']."<br>";
	}*/
	
	$insertar="INSERT INTO curso_materia (id_curso, id_materia) VALUES($curso,$materia)";
	$resul=$mysqli->query($insertar);
	if ($resul > 0){
		echo"<script type=\"text/javascript\">alert('Materia Asignado Correstamente'); window.location='materiasCursos.php';</script>";
	}
	else{
		echo"<script type=\"text/javascript\">alert('Error verifique por favor'); window.location='materiasCursos.php';</script>";
	}
	/*echo $curso."<br>";
	$consul="SELECT nombre_materia FROM materia WHERE id='$materia'";
	$re=$mysqli->query($consul);
	while ($row=$re->fetch_assoc()) {
		echo $row['nombre_materia'];
	}*/
}
?>
<div id="nom">
<?php
if (isset($_POST['verMaterias'])){
	$cu=$_POST['curso'];
	$consultar="SELECT id_materia FROM curso_materia WHERE id_curso='$cu'";
	$reponse=$mysqli->query($consultar);
	while ($row=$reponse->fetch_assoc()) {
		 $mat=$row['id_materia'];
		 $consult="SELECT * FROM materia WHERE id='$mat'";
		 $r=$mysqli->query($consult);
		 while ($row=$r->fetch_assoc()){
			echo $row['nombre_materia'];?>.......<a href="materiasPorCursos.php?id=<?php echo $row['id'];?>">Desavilitar</a><br>
			<?php
		 }
	}
}
?>
</div>