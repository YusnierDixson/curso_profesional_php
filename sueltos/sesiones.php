<?php
session_start(['name'=>'DIXSON',]);

if (isset($_SESSION['login'])) {
  echo 'Bienvenido'.$_SESSION['login'];
}else {
  echo 'Sin sesión activa';
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="login_sesion.php" method="post">
      Usuario:<input type="text" name="user" value=""></br>
      Contraseña:<input type="password" name="pass" value=""></br>
<input type="submit" name="send" value="Enviar">

    </form>
  </body>
</html>
