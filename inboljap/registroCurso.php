<html>
  <head>
  <title>Cursos</title>
  <link rel="stylesheet" type="text/css" href="css/stylo.css">
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript">
      function Vercursos(){
              $.ajax({
                type:"POST",
                url:"Vercursos.php",
                data:{},
                success:function(datos){
                  $('#cursos').html(datos);
                }
              });
            }

  </script>
  </head>
  <body>

<?php
require('registros.html');
?>
<link rel="stylesheet" type="text/css" href="css/registros.css">
<h3>Registrar Curso</h3>
		<div id="registro"><br>
      <form action="Regcurso.php" method="POST">
    
               
               <label> Nombres Curso:</label><input name="curso" type="text" />
                         
               
                <input id="btnMat" type="submit" name="Submit" value="Guardar" />
             
    </form>
    </div>
 
		<div id="resultado"><?php // include('consulta.php');?></div>
 
    </body>
</html>





