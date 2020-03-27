<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="form.php" method="post">


    <table>
      <?php
        $elements = array('name' =>'Nombre' ,'lastname' =>'Apellidos' ,'age' =>'Edad'
        ,'address' =>'Dirección' ,'phone' =>'Teléfono');
        foreach ($elements as $key => $value):
       ?>
       <tr>
         <td><?php echo $value ?>
         </td>
         <td>
           <input type="text" name=<?php echo $key ?> value="">
         </td>
       </tr>
     <?php endforeach; ?>
     <tr>
       <td>Sexo
       </td>
       <td>
         <input type="radio" name="sex" value="Mujer">Mujer
         <input type="radio" name="sex" value="Hombre">Hombre
       </td>
     </tr>
     <tr>
       <td>
          <input type="submit" name="submit" value="Enviar">
       </td>
     </tr>
    </table>
        </form>
  </body>
</html>
