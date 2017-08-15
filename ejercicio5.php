<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Convertidor de horas a minutos y segundos ARRAY</h1>
    <br>
    <form method="post">
      Ingrese horas: <input type="text" name="horas" value="">
      <input type="submit" name="enviar" value="Calcular">
      <hr>
      <h1>Resultados</h1>
      <br>
    </form>

    <?php
      $horas =$_POST['horas'];
      $array= array($horas);  

      $array1 = $horas[0] * 60;
      $array2 = $horas[0] * 3600;
      echo "$horas hora equivalen a $array1 minutos";
      echo "<br>";
      echo "$horas hora equivalen a $array2 segundos";

     ?>
</body>
</html>