<?php
$colores=array('Rojo','Azul','Verde' );
$persona=array('Nombre'=>'Marines','Apellido'=>'Méndez','Edad'=>35);
$battleShip= array(
  'A' => array('Mar','Barco','Mar','Mar'),
  'B' => array('Mar','Mar','Mar','Mar'),
  'C' => array('Mar','Mar','Barco','Mar'),
  'D' => array('Mar','Mar','Mar','Mar'));
//Formas de recorrer los diferentes tipos de arrelos que existen
//Arreglos indexados
for ($i=0; $i <sizeof($colores) ; $i++) {
  echo "Indice: $i Valor:{$colores[$i]}\n";
}

//Arreglos Asociativos
foreach ($persona as $key => $value) {
  echo "$key:$value \n";
}

//Arreglos Multidimensionales
foreach ($battleShip as $key => $value) {
  for ($i=0; $i <sizeof($value) ; $i++) {
    echo "Coordenadas: Fila $key Columna $i \n";
  }
}


 ?>
