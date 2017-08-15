<!DOCTYPE html>
<html>
<head>
	<title>pago neto</title>
</head>
<body>
<h1>Pago neto de un trabajador en ARRAY</h1>

	<form method="post">
      Ingrese Horas trabajadas: <br><input name="ht"  type="number" /></br>
      Ingrese valor de tasa por horas: <br><input name="th"  type="number" /></br>
      Ingrese tasa de interes: <br><input name="ti"  type="number"/></br>
      <input name="enviar" type="submit" value="Calcular"/>
      <hr>
      <h1>Resultados</h1>
      <br>
    </form>	

<?php 
	
	$ht= $_POST['ht'];
    $th= $_POST['th'];
    $ti= $_POST['ti'];
    $numero = array ($ht,$th,$ti);

    $pn=($numero[0]*$numero[1])-$numero[2];

    echo "El pago neto es: $pn";
 ?>

</body>
</html>