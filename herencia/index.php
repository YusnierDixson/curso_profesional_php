<?php
require_once('persona.php');
require_once('cliente.php');
require_once('empleado.php');
require_once('autoload.php');
$load=new AutoLoader();
$load->load();

$newClient=new Cliente();
//$newClient->comer();
//$newClient->pay();
$newClient->setNombre('Fernando');
$newEmpleado=new Empleado();
$newEmpleado->setNombre('Manolo');
$newClient->say($newEmpleado);



?>
