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
$arrayMarcador=[];
$archivo = fopen ("marcador.txt", "r");
while ($lineas = fgets($archivo)) {
	$nom=explode(" ",$lineas);
	$clave=$nom[1];
	$valor=$nom[0];
	$cv=array($clave);
	$av=array_fill_keys($cv,$valor);
	array_push($arrayMarcador,array_fill_keys($cv,$valor));
}
print_r($av);


asort($arrayMarcador);
echo "<table border=1 height='200' width='400'>";
foreach ($arrayMarcador as $value) {
	echo "<tr>";
	echo "<td>$value</td>";
	echo "</tr>";
}
echo "</table>";


?> 


</body>
</html>