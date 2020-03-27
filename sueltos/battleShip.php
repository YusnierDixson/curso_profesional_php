<?php
$battleShip= array(
  'A' => array('Mar','Barco','Mar','Mar'),
  'B' => array('Mar','Mar','Mar','Mar'),
  'C' => array('Mar','Mar','Barco','Mar'),
  'D' => array('Mar','Mar','Mar','Mar'));

  foreach ($battleShip as $key => $value) {
    for ($i=0; $i <sizeof($value) ; $i++) {
      if($battleShip[$key][$i]=='Barco'){
        echo "Coordenadas: Fila $key Columna $i  destruir\n";
      }
      else{
        echo "Coordenadas: Fila $key Columna $i \n";
      }


    }
  }

 ?>
