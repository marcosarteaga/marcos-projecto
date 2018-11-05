function pedirnombre() {
	var person = prompt("Introduce tu nombre", "Nombre");
	var puntos = 10;
	window.location.href ="?w1=" +puntos+" "+person; 


    
}

function confirmar(){
	var mensaje = confirm("¿Quieres guardar tu puntuación?");
	if (mensaje) {
		pedirnombre();

	}
}