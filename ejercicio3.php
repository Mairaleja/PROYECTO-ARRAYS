<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>calculadora en ARRAY</h1>
	<form method="post">
       Ingrese Numero1 <input type="text" name="numero1" value="">
       Ingrese Numero2 <input type="text" name="numero2" value="">
       <input type="submit" name="enviar" value="Calcular">
       <hr>
      <h1>Resultados</h1>
      <br>
    </form>	

<?php 
	
	$numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2']; 
    $numero = array ($numero1,$numero2);

    $suma=($numero[0]+$numero[1]);
    $resta=($numero[0]-$numero[1]);
    $multiplicacion=($numero[0]*$numero[1]);
    $division = $numero[0] / $numero[1];
    $modulo = $numero[0] % $numero[1];

      echo "La suma es: $suma";
      echo "</br>";
      echo "La resta es: $resta";
      echo "</br>";
      echo "La multiplicacion es: $multiplicacion";
      echo "</br>";
      echo "La division es: $division";
      echo "</br>";
      echo "El modulo es: $modulo";
 ?>


</body>
</html>