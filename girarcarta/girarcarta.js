function pedirnombre() {
	var person = prompt("Introduce tu nombre", "Nombre");
	var puntos = 7;
	var puntostr =puntos.toString();
	if (puntos<=9) {
		var puntuacion = 0+puntostr; 
		window.location.href ="?w1=" +puntuacion+"&w2="+person; 
	}else{
		window.location.href ="?w1=" +puntos+"&w2="+person; 
		/*window.location.href ="w1?"+puntos&"w2="+person;*/ 
	}


    
}

function confirmar(){
	var mensaje = confirm("¿Quieres guardar tu puntuación?");
	if (mensaje) {
		pedirnombre();

	}
}

function zero(){
	var punt="1";
	document.getElementById("p2").innerHTML = 0+punt;
}