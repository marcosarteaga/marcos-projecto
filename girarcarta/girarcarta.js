function girar(id){
	document.getElementById(id).addEventListener('click',girarcarta);
	girarcarta(id);
}


function girarcarta(id2){
	document.getElementById(id2).classList.add('flipped');

}

function myFunction() {
    var person = prompt("Introduce tu nombre", "Nombre");
    
}