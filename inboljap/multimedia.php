<?php
	$formatos = array('.jpg','.png','.webm','.docx','.xlsx','.mp3','.PNG');
	$directorio = 'media';
	if(isset($_POST['boton'])){
		$nombreArchivo = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)) {
			if (move_uploaded_file($nombreTmpArchivo, "media/$nombreArchivo")) {
				echo"<script type=\"text/javascript\">alert('Archibo subido exitosamente'); window.location='subir.php';</script>";
			}else{
				echo"<script type=\"text/javascript\">alert('Ocurrio un Error en el servidor'); window.location='subir.php';</script>";
			}
		}else{
			echo"<script type=\"text/javascript\">alert('Archibo No Permitido Verifique por favor'); window.location='subir.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Videso</title>
	<style type="text/css">
	body{
		background-color: #4169E1;
	}
	#im{
		width: 23%;
		height: 200px;
		float: left;
		margin-left: 15px;
		margin-top: 20px;
		border-radius: 10px;
		text-align: center;
	}
	#im img{
		width: 100%;
		height: 100%;
		border-radius: 10px;
		-webkit-box-shadow: 4px 4px 4px rgba(0,0,0,0.4);
		-moz-box-shadow: 4px 4px 4px rgba(0,0,0,0.4);
		box-shadow: 4px 4px 4px rgba(0,0,0,0.4);
		-webkit-transition: all 0.9s ease-out;
		-moz-transition: all 0.9s ease;
		-ms-transition: all 0.9s ease;
	}
	#im img:hover{
		border: 3px solid orange;
		margin-top:  -8px;
		box-shadow: 0px 10px 5px black;
	/*	-webkit-transform: rotate(-3deg);
		-moz-transform: rotate(-3deg);
		-ms-transform: rotate(-3deg);
		transform: rotate(-3deg)*/
	}
	#archi {
		width: 100%;
	}
	#archi video{
		background-color: red;
	}
	#title{
		width:80%;
		height: 35px;
		border-radius: 10px;
		background-color: black;
		margin: auto;
		
	}
	#title h3 {
		color: white;
		margin-top: 10px;text-align: center;
	}
	</style>
</head>
<body>
	<div id="title"><a>
	<MARQUEE onmouseover=this.stop() onmouseout=this.start()  trueSpeed scrollAmount=1 scrollDelay=5 width=1050 align="left"><A>
	 <FONT face=Arial color=white size=1>
     <STRONG><h2>BIENVENIDO AL SISTEMA DE INFORMACION	                    	Archivos Subidos al servidor</h2></STRONG></FONT>
			</A></MARQUEE
			></a>
		</div>
	<div id="contenedor">
			<?php
			if ($dir = opendir($directorio)) {
				while ($archivo = readdir($dir)) {
					if ($archivo !='.' && $archivo !='..' && $archivo != '.mp3')
					 {
					 	if ($archivo == '.mp3' ) {
					 		?>
					 		<div id="archi">
								<video controls>
								<source	src="media/<?php echo $archivo; ?>">Clik</video>
							
						</div>
					 		<?php
					 	}else{

						?>
						<div id="im">
							<a href="media/<?php echo $archivo?>"><img src="media/<?php echo $archivo;?>"></a>
							<?php echo $archivo;?>
						</div>
						<?php }
					}
					else{
						if ($archivo == '.mp3') {
							?>
					 		<div id="archi">
								<video controls>
								<source	src="media/<?php echo $archivo; ?>">Clik</video>
							
						</div>
					 		<?php
						}
					}		
					
				}
			}
			?>
	</div>
</body>
</html>