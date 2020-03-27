<?php
$user='dixson';
$pass='1234';
session_start();
if ($_POST['user']==$user&&$_POST['pass']==$pass) {
  $_SESSION['login']='Administrador';
  header('Location:sesiones.php');
}else {
  echo "Usuario o Contraseña incorrectos";
}


 ?>
