<?php
/**
 * Persona
 */
class Persona
{
  private $nombre;
  private $apellidos;
  private $sexo;
  private $edad;
  private $telefono;

  function hablar(){

  }
  protected function ver(){
   echo "Estoy viendo como persona";
  }
  function correr(){


  }



    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

     }


    public function getApellidos()
    {
        return $this->apellidos;
    }


    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

     }


    public function getSexo()
    {
        return $this->sexo;
    }


    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

     }


    public function getEdad()
    {
        return $this->edad;
    }


    public function setEdad($edad)
    {
        $this->edad = $edad;

     }


    public function getTelefono()
    {
        return $this->telefono;
    }


    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

     }

}



?>
