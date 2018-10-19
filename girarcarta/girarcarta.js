function girar(){
	document.getElementById('id1').src="reverso.png";
	}

//Se encarga de añadir la class que permite el efecto de girar.
function flip() {
	carta = document.getElementById("img");
	carta.classList.add("flipped");   

}
//Funcion que se ejecuta nada mas cagar la pagina que añade la funcion flip() a las cartas.
window.onload = function addEvent(){
	var carta = document.getElementById("carta");
	carta.addEventListener("click",flip());
	}
