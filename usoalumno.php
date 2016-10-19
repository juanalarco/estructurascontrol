<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Alumno </title>
  </head>
  <body>
    <?php
    //creamos los objetos
    include "alumnos.php";
    $alumno=new Alumnos();
    //Le asignamos valores
    $alumno->setNombre("Juan");
    $alumno->setEdad("20");
    $alumno->setCurso("1º");
    $alumno->setCiclo("DAW");

     ?>
     Tengo un alumno que se llama <b><?=$alumno->getNombre()?></b>.
     <br>
     Tiene <b><?=$alumno->getEdad()?></b> años.
     <br>
     Esta estudiando <b><?=$alumno->getCiclo()?></b>
     <br>
     y va por <b><?=$alumno->getCurso()?></b>
  </body>
</html>
