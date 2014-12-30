<html>
  <head>
  <title>Cursos</title>
  <link rel="stylesheet" type="text/css" href="css/stylo.css">
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>

  </head>
  <body>

<?php
require('registros.html');
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<h3>Registrar Materias</h3>
		<div id="registro"><br>
      <form action="RegMateria.php" method="POST">
  
               
                  <label>Nombres Materia: </label><input name="materia" type="text" />
                    <input id="btnMat" type="submit" name="Submit" value="Guardar" />
             
    </form>
    </div>
 
		<div id="resultado"><?php // include('consulta.php');?></div>
 
    </body>
</html>
