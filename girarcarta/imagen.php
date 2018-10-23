<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="girarestilo.css">
	<script type="text/javascript"  defer src="girarcarta.js"></script>
</head>
<body>
	
	<?php
	echo "
	<div id='id1' onclick='girar(this.id)' class='card' >
    	<div><img src='mario.jpeg'></div>
    	<div class='back'><img src='reverso.png'></div>
  	</div>
	";

	echo "
	<div id='id2' onclick='girar(this.id)' class='card2' >
    	<div><img  src='mario.jpeg'></div>
    	<div class='back'><img src='reverso.png'></div>
  	</div>
	";



	echo "
	<div id='id3' onclick='girar(this.id)' class='card3' >
    	<div><img src='mario.jpeg'></div>
    	<div class='back'><img src='reverso.png'></div>
  	</div>
	";


	?>

</html>




