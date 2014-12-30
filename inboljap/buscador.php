<!DOCTYPE html>
<html>
	<head>
		<title>registro</title>
		<link rel="stylesheet" type="text/css" href="css/stylo.css">
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript">
		
		function loadXMLDoc()
		{
			var xmlhttp;

			var n=document.getElementById('bus').value;

			if(n=='')
			{
				document.getElementById("myDiv").innerHTML="";
				return;
			}

			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
				xmlhttp.onreadystatechange=function()
					{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
							document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
						}
					}
		xmlhttp.open("POST","proc.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("q="+n);
	}
		</script>
		<style type="text/css">
		#buscador{
			width: 400px;
			margin: auto;
			margin-top: 50px;
			background-color: green;
		}
		#myDiv{
			width: 65%;
			height: 20px;
			margin: auto;
			text-align: center;
			font-size: 20px;
			border-radius: 7px;
		}
		#buscador input{
			height: 30px;
			width: 330px;
			border-radius: 5px;
		}
		</style>
	</head>
	<body>
	
<?php
require('registros.html');
?>
<!---->

<br>
<div id="buscador">
Buscar:<input type="text" id="bus" name="bus" size="30" onkeyup="loadXMLDoc()" required placeholder="Introdusca el Nombre a Buscar"/>
</div>
<br>
<div id="myDiv">
		</div>
		<div id="formularioAlumno"></div><br>
		<div id="tabla"></div>
</body>
	
</html>