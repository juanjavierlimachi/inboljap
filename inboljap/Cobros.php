<?php
require('registros.html');
require('conex.php');
$id=$_GET['id'];
?>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>	
<script type="text/javascript">
$(document).ready(function(){
	$('#pri').click(function(){
		$('#primera').show(1000);
		$('#segundo').hide(1000);
	});

	$('#Re').click(function(){
		$('#segundo').show(1000);
		$('#primera').hide(1000);
	});
});
</script>
<style type="text/css">
#pri{
	background-color: red;
	width: 100px;
	height: 20px;
	margin-top: 10px;
	margin-left: 123px;
	float: left;
	cursor: pointer;
}
#Re{
	background-color: green;
	width: 200px;
	height: 20px;
	margin-top: 10px;
	margin-left: 0%;
	float: left;
	cursor: pointer;
}
#primera{
	display: none;
	width: 50%;
	height: 400px;
	background-color: orange;
	margin-top: 100px;
	margin: auto;
}
#segundo{
	display: none;
	width: 50%;
	height: 400px;
	background-color: white;
	margin-top: 100px;
	margin: auto;
}
</style>
<div id="pri">Primera ves</div>
<div id="Re">Alumno Regular</div><br><br>
<div id="primera">Primera ves
<?php echo "tiene el id Nro".$id;?><br>
<label>Monto</label><input type="num" size="20">
<label>Saldo</label><input type="num" size="30"> <br>
<label>Deuda a Completar</label><input type="num" size="30"> 
<input type="submit" value="Registrar">
</div>
<div id="segundo">Alumno Regular
<?php echo "tiene el id Nro".$id;?><br>
<label>Monto</label><input type="num" size="20">

<input type="submit" value="Registrar">
</div>