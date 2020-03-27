<?php
$logiSuccess=false;
if (isset($_SERVER['PHP_AUTH_USER'])&&(isset($_SERVER['PHP_AUTH_PW']))) {
  $userName=$_SERVER['PHP_AUTH_USER'];
  $userPW=$_SERVER['PHP_AUTH_PW'];
  if ($userName=='dixson'&&$userPW=='1234') {
    $logiSuccess=true;
  }
}
if (!$logiSuccess) {
  header('www-Authenticate:Basic');
  header('HTTP/1.0 401 Unauthorized');
  echo "Error";
}else {
  echo "Bienvenido $userName";
}

 ?>
