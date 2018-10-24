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
fclose ($archivo);
echo "
Líneas: " . $num_lineas;

for ($i=0; $i < $num_lineas ; $i++) { 
	echo $arrayMarcador[0];
}

?> 


</body>
</html>