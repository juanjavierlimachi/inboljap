<?php
require_once('conex.php');
ob_start();
?>
<?php echo "Fecha:".date("d/m/Y");?><h3 align="center">Nomina de Alumnos</h3>
<table border="0.1" align="center" style="width: 100%;">
<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Ci</td><td>Fecha Registro</td></tr>
<style type="text/css">
p{
	text-align: center;
}
</style>
<?php 
require('conex.php');
	//$da=$_POST['dato'];
	$id=$_GET['id'];
	$query="SELECT * FROM alumno WHERE curso='$id'";
	$sql="SELECT nombre_curso FROM curso WHERE id=$id";
	$resul=$mysqli->query($sql);
	$resultado=$mysqli->query($query);
$cont=0;
while($row=$resultado->fetch_assoc())
					{$cont++;

					 ?>
						<tr>
							<td><?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['apellido_paterno'];?>
							</td>
							<td>
								<?php echo $row['apellido_materno'];?>
							</td>
							<td>
								<?php echo $row['ci'];?>
							</td>
							<td>
								<?php echo $row['fecha_de_registro'];?>
							</td>
							
							
						</tr>
					  <?php
					} 
				
					?>

</table>
<?php
while ($row=$resul->fetch_assoc()) { echo "<br>";
	?>
	<p><?php echo "Total de Alumnos Inscritos... ".$cont."...en el Curso ".$row['nombre_curso'];?></p>
	<?php
}

?>
<?php
$content = ob_get_clean();
require_once('html2pdf_v4.03/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output('lista.pdf');

?>