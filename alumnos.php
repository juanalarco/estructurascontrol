<?php
//Declaracion propiedad
class Alumnos
{
  // Declaración de una propiedad
  public $nombre = "";
  public $edad = "";
  public $curso = "";
  public $ciclo = "";

  //Introducimos los getters
  public function getNombre()
  {
    return $this->nombre;
  }

  public function getEdad()
  {
    return $this->edad;
  }

  public function getCurso()
  {
    return $this->curso;
  }

  public function getCiclo()
  {
    return $this->ciclo;
  }

//Introducimos los setters
public function setNombre($nombre){
  $this->nombre=$nombre;
  return $this;
}

public function setEdad($edad)
{
  if ($edad<18){
    $this->edad=18;
  }else {
    $this->edad=$edad;
  }
}

public function setCurso($nuevoCurso)
{
  if ($nuevoCurso=1){
    $this->curso=$nuevoCurso;
  } elseif ($nuevoCurso=2) {
    $this->curso=$nuevoCurso;
  }else{
    $this->curso=1;
  }
}

public function setCiclo($ciclo)
{
  $this->ciclo=$ciclo;
  return $this;
}
}
 ?>
