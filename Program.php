<html>
  <head>
    <script type="text/javascript" src="efectogirar.js"></script>
    <link href='estilos-quien-es-quien.css' type='text/css' rel='stylesheet' >
    <title></title>
  </head>

  <body>
    <?php
    #Arrays que usaremos
    $arrayImg = array();
    $arrayGeneral = array();
    $arrayNombres = array();
    $Carac = array();
    #Lectura de fichero.
    $Img = fopen("imatges.txt", "r") or die("Error al leer documento.");
    while(!feof($Img)){
      $linea=fgets($Img);
      $saltodelinea=nl2br($linea);
      array_push($arrayImg, $saltodelinea);
    }
    fclose($Img);

    # Añadimos el fichero en un array
    foreach ($arrayImg as $key => $i) {
      $names = explode(":",$i);
      array_push($arrayGeneral, $names);
    }
    # Creacion de array nombres
    $longGnl = count($arrayGeneral);
    for($i = 0; $i<$longGnl;$i++){
      array_push($arrayNombres, $arrayGeneral[$i][0]);
    }
    # Creacion de array caracteristicas
    for($i=0;$i<$longGnl;$i++){
      array_push($Carac, $arrayGeneral[$i][1]);
    }

    # 1. Una misma imagen (nombre de imagen) aparece dos veces en el archivo img.txt

    if(count($arrayNombres)>count(array_unique($arrayNombres))){
      $Logs = fopen("logs.txt", "w");
      fwrite($Logs, "¡Error! Hay un nombre repetido en el archivo imatges.txt.");
      fclose($Logs);
      echo"<h2>¡Error! Hay un nombre repetido en el archivo imatges.txt.</h2>";
    }elseif(count($Carac)>count(array_unique($Carac))){
      print_r("klk");
      $Log = fopen("logs.txt", "w");
      fwrite($Log, "¡Error! Hay caracteristicas repetidas en el archivo imatges.txt.");
      fclose($Log);
      echo"<h2>¡Error! Hay caracteristicas repetidas en el archivo imatges.txt.</h2>";
    }
    else{
    
    $arrayRandom=[];

    $numeros=range(0,11);
    shuffle($numeros);
    foreach ($numeros as $value) {
      array_push($arrayRandom,$value);
    }
    $arrayGeneral2=[];
    foreach ($numeros as $value) {
      array_push($arrayGeneral2, $arrayGeneral[$value][0]);
    }
    $cartaoculta = $arrayGeneral2[0];
    $img = $arrayGeneral2;

    $arrayDiv = [];
    $arrayId= [];
    $divs=range(1,12);
    shuffle($divs);
    foreach ($divs as $valor) {
      array_push($arrayDiv,"card".$valor);
      array_push($arrayId,"id".$valor);
    }

    
    
    $i=0;
    foreach ($img as $fotos) {
      if( substr($fotos,-3)=="jpg" or substr($fotos,-3)=="png" or substr($fotos,-4)=="jpeg"){
        echo "<div id='$arrayId[$i]' onclick='girar(this.id)' class='$arrayDiv[$i]'>";
        echo "<div><img src='imagenes/$fotos' width='120' height='120'></div>";
        echo "<div class='back'><img src='imagenes2/reversos.jpg' width='120' height='120'></div>";
        echo "</div>";
        $i=$i+1;
        if ($cartaoculta==$fotos) {
          echo "<div id='id13' class='divoculta'>";
          echo "<div><img src='imagenes2/reversos.jpg' width='120' height='120'></div>";
          echo "<div class='back'><img src='imagenes/$fotos' width='150' height='150'></div>";
          echo "</div>";
        }
    }
    }
    }

    ?>
    <button onclick="tiempo()" id="b1">Pregunta</button>
    <p id="p1"></p>
  </body>
</html>
