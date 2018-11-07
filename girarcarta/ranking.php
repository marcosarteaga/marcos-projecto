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
$puntos=$_GET["w1"];
$nombre=$_GET["w2"];
fwrite($archivo,$puntos." ".$nombre.PHP_EOL);
fclose ($archivo);



$lineas;
$archivo = fopen ("marcador.txt", "r");
$arrayMarcador=file("marcador.txt");

print_r($arrayMarcador);

sort($arrayMarcador);

echo "<table border=1 height='200' width='400'>";
echo "<tr><td>RANKING DE MEJORES JUGADORES</td></tr>";
foreach ($arrayMarcador as $value) {
	echo "<tr>";
	echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";
echo "<p id='p2'>fsdfsd</p>";
echo "<button onclick='zero()'>zero</button>";

?> 
</body>
</html>