<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Convertidor de Millas</h1>
    <br>
    <form method="post">
      Ingrese Millas: <input type="text" name="milla" value="">
      <input type="submit" name="enviar" value="Calcular">
      <hr>
      <h1>Resultados</h1>
      <br>
    </form>

    <?php
      $milla=$_POST['milla'];
      $array=array($milla);

      $km=$array[0]*1.609344;

      echo "$milla millas equivalen a $km kilometros";

     ?>
  </body>
</html>
