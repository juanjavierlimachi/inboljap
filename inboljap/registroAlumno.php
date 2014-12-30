<!DOCTYPE html>
<html>
	<head>
		<title>registro</title>
		<link rel="stylesheet" type="text/css" href="css/stylo.css">
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<meta charset="utf-8" />
		<script type="text/javascript">
		/*      function cargar(){
		            var url="buscar.html"
		            $.ajax({   
		                type: "POST",
		                url:url,
		                data:{},
		                success: function(datos){       
		                    $('#tabla').html(datos);
		                }
		            });
		        }
		        function RegistrarAlumno(){
		        	$.ajax({
		        		type:"POST",
		        		//url:"registroAmunos.html",
		        		url:"registroAlumno.php",
		        		data:{},
		        		success:function(datos){
		        			$('#formularioAlumno').html(datos);
		        		}
		        	});
		        }
*/
		</script>
		<script type="text/javascript">
	var validarnombre=new livevalidation_standalone.compressed('nombre');
	validarnombre.add(Validate.Presence);

	var validaA=new livevalidation_standalone.compressed('paterno');
	validaA.add(Validate.Presence);
</script>
	</head>
	<body>

<?php
require('registros.html');
require('conex.php');
$sql="SELECT * FROM curso";
$resultado=$mysqli->query($sql);
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<link rel="stylesheet" type="text/css" href="css/botones.css">
<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>
<style type="text/css">
#div form input placeholder{
	font-size: 40%;
	background-color: red;
}
</style>
<h3>Registrar Alumno</h3>
<div id="registro">
	<br>
	<form id = "form"name="" action="nuevoalumno.php" method="POST" >
		   <label>Nombre :</label> <input name="nombre" id="nom" type="text" placeholder="Tu nombre"/> <br>
		   <label>Apellido Paterno:</label> <input name="paterno" id="Ap" type="text"placeholder="Apellido Paterno" /><br>
		  <label>Apellido Materno:</label> <input name="materno" id="Am" type="text"placeholder="Apellido Materno" /><br>

		  <label>ci:</label> <input name="ci" type="text" id="ci" placeholder="Ci"/> <br>
		  
		  <label>Curso:</label> <select name="curso" id="cur"><option>Seleccione un Curso</option><br>
		   <!--</label><input name="curso" type="text" placeholder="Curso"/><br> El value del select se guarda en la bd -->
		  	<?php while ($row=$resultado->fetch_assoc()) { ?>
		  <option value="<?php echo $row['id'];?>" name="curso"><?php echo $row['nombre_curso'];?></option>
		  <?php
		  }
		  ?>
		  </select><br><br>
		  <label>Direccion: </label><input name="direc" id="di" type="text" placeholder="Direccion"/><br>
		  <label>Telefono:</label> <input name="tel" id="tel" type="text" placeholder="Telefono"/><br>
		  <label>Fecha Nac:</label> <select name="dia"> 
		  						<option>Dia</option>
		  						<?php 
		  							for ($i=1; $i <= 31 ; $i++) { 
		  							echo "<option value=".$i.">".$i."</option>";
		  							}
		  						 ?>
		  						
		  					 </select>
		  					 <select name="mes"> <option>Mes</option>
		  						<?php 
		  							for ($m=1; $m <= 12 ; $m++) { 
		  							echo "<option value=".$m.">".$m."</option>";
		  							}
		  						 ?>
		  						
		  					 </select>
		  					 <select name="anio"> <option>Año</option>
		  					 	<?php
		  					 	for ($a=1970; $a<=2015  ; $a++) { 
		  					 		echo "<option value=".$a.">".$a."</option>";
		  					 	}
		  					 	?>
		  					 </select><br><br>
		   <p><input id="boton" name="ver" type="submit" value="Guardar" /><input id="reset" type="reset" value="Cancelar">
		</form>
		
		<!--<form id="" action="subir.php" >
			<input type="file" name="subir" ><input name="subir" type="submit" value="Registrar Datos">
		</form>-->
</div>
<div id="tabla"></div>
<script type="text/javascript">
</script>
</body>
<div id="myDiv">
		</div>
		<div id="formularioAlumno"></div>
</html>