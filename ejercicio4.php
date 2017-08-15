<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>pitagora en ARRAY</h1>
	<form method="post">
      Ingrese primer numero: <input type="text" name="numero1" value=""><br><br>
      Ingrese segundo numero: <input type="text" name="numero2" value=""><br><br>
      <input type="submit" name="enviar" value="Calcular">
      <hr>
      <h1>Resultados</h1>
    </form>
	<?php 
		$numero1 = $_POST['numero1'];
	    $numero2 = $_POST['numero2'];
	    $array= array($numero1,$numero2 );
	    $pitagoras = sqrt(($array[0]**2)+($array[1]**2));

	    echo "El teorema de pitagora de los numeros ingresados es : $pitagoras";



 	?>
</body>
</html>