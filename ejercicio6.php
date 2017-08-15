<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Convertidor de area y perimetro de un rombo ARRAY</h1>
    <br>
    <form method="post">
      Ingrese Diagonal 1: <input type="text" name="Diagona1" value="">
      Ingrese Diagonal 2: <input type="text" name="Diagona2" value=""><br><br>
      Ingrese Lado: <input type="text" name="lado" value="">
      <input type="submit" name="enviar" value="Calcular">
      <hr>
      <h1>Resultados</h1>
      <br>
    </form>
    	<h1>Convertidor de area y perimetro de un rombo ARRAY</h1>
    <?php
    $Diagona1 = $_POST['Diagona1'];
    $Diagona2 = $_POST['Diagona2'];
    $lado = $_POST['lado'];
	$array=array($Diagona1,$Diagona2,$lado);
    $area= ($array[0]*$array[1])/2;
    $perimetro= $array[2]*4;
    echo "El area del rombo es: $area";
    echo "<br>";
    echo "El perimetro del rombo es: $perimetro";
     ?>
</body>
</html>