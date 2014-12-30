<?php

function conexion(){

$con = mysql_connect("localhost","root","");

if (!$con){

die('Nose pudo conectar a la base de datos: ' . mysql_error());
}

mysql_select_db("inboljap", $con);

return($con);

}

?>

<?php


$q=$_POST['q'];
$con=conexion();

$sql="SELECT * FROM alumno where nombre LIKE '".$q."%'";
$res=mysql_query($sql,$con);

if(mysql_num_rows($res)==0){

echo '<b>No hay sugerencias</b>';

}else{

while($fila=mysql_fetch_array($res)){

echo "<li>".$fila['nombre']."         ";   echo $fila['apellido_paterno']."        ";	echo $fila['apellido_materno'];?>
 | <a href="Cobros.php?id=<?php echo $fila['id'];?>">Mensualidad</a> <?php echo "</li>";
}

}

?>