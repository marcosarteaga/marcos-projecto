<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="girarcarta.js"></script>
	<title></title>
</head>
<body>
<?php
$archivo = fopen ("marcador.txt", "a");
echo "<button onclick='confirmar()'> DAle para confirmar</button>";
$nombre=$_GET["w1"];
print_r($nombre);
fwrite($archivo,$nombre.PHP_EOL);
fclose ($archivo);
$archivo = fopen ("marcador.txt", "r");
$arrayMarcador=file('marcador.txt');

arsort($arrayMarcador);
print_r($arrayMarcador);
echo "<table border=1 height='200' width='400'>";
$arrayjugadores=explode(" ", $arrayMarcador[0]);
foreach ($arrayMarcador as $value) {
	echo "<tr>";
	echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";


?> 


</body>
</html>