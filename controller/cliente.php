<?php
namespace controller;
require_once('persona.php');
require_once('operation.php');
/**
 * Cliente
 */
class Cliente extends Persona
{
  use Operation;
private $frecuente;
private $correo;
function __construct(){
  $this->frecuente='';
  $this->correo='';
}
function comer()
{
  echo parent::ver();
}



    public function getFrecuente():String
    {
        return $this->frecuente;
    }


    public function setFrecuente(String $frecuente)
    {
        $this->frecuente = $frecuente;

     }


    public function getCorreo():String
    {
        return $this->correo;
    }


    public function setCorreo(String $correo)
    {
        $this->correo = $correo;

     }
  public function pay()
     {
      echo 'El dinero que gaste fue:'.$this->Plus(100,600);
     }
     public function say(Empleado $empleado)
     {
       echo "{$this->getNombre()} felicitame al chef {$empleado->getNombre()}";
     }

}


 ?>
