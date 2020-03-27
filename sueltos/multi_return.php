<?php
function operaciones($num1,$num2){
  return array($num1+$num2,$num1-$num2,$num1*$num2,$num1/$num2);
}
list($suma,$resta,$multi,$division)=operaciones(15,5);
echo "La suma es: $suma; La resta es: $resta; La multiplicación es: $multi y la división es $division";

?>
