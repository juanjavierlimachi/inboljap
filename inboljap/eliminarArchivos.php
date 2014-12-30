<?php
$archi = $_GET['archivo'];
//$path="media/$archi";
$cont=0;
$dir=opendir("$archi");
unlink("media/$archi");
$cont=1;
if ($cont==1) {
	echo"<script type=\"text/javascript\">alert('Archivo Eliminado Correctamente'); window.location='subir.php';</script>";
}

?>