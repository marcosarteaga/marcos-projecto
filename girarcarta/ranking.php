<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$archivo = fopen ("marcador.txt", "r");
$num_lineas = 0;
$arrayMarcador=file('marcador.txt');

while (!feof ($archivo)) {
    if ($linea = fgets($archivo)){
    	$num_lineas++;
   }
}
asort($arrayMarcador);

echo "
Líneas: " . $num_lineas;
fclose ($archivo);

echo "<br>";
print_r($arrayMarcador);
echo "<table border=1 height='200' width='400'>";
$arrayjugadores=explode(" ", $arrayMarcador[0]);
print_r($arrayjugadores);
foreach ($arrayMarcador as $value) {
	echo "<tr>";
	echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";
?> 


</body>
</html>