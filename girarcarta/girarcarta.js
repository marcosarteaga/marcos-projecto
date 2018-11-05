function pedirnombre() {
	var person = prompt("Introduce tu nombre", "Nombre");
	var puntos = 2000;
	window.location.href ="?w1=" +puntos+"&w2="+person; 
	/*window.location.href ="w1?"+puntos&"w2="+person;*/ 


    
}

function confirmar(){
	var mensaje = confirm("¿Quieres guardar tu puntuación?");
	if (mensaje) {
		pedirnombre();

	}
}