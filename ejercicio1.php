<!DOCTYPE html>
<html>
<head>
	<title>promedio</title>
</head>
<body>
	<h1>promedio de notas en ARRAY</h1>

	 
	<form method="post">
      Ingrese nota 1: <br><input name="N1"  type="number" /></br>
      Ingrese nota 2: <br><input name="N2"  type="number" /></br>
      Ingrese nota 3: <br><input name="N3"  type="number"/></br>
      <input name="enviar" type="submit" value="Calcular"/>
      <hr>
      <h1>Resultados</h1>
      <br>
    </form>	

 <?php

	$N1= $_POST['N1'];
    $N2= $_POST['N2'];
    $N3= $_POST['N3'];
    $numero = array ($N1,$N2,$N3);
    $promedio=($numero[0]+$numero[1]+$numero[2])/3;
    echo "El promedio es: $promedio";
    
 ?>
</body>
</html>