var tempo;
var girarTiempo;
function girar(id){
	if (girarTiempo == 1) {
		girarcarta(id);
	}
}

function girarcarta(id2){
	document.getElementById(id2).classList.add('flipped');

}

function tiempo(){
	girarTiempo = 1;
	var n = 20;
	var l = document.getElementById("p1");
	tempo = setInterval(function(){
		l.innerHTML = n; 
		n=n-1
		if (n == -1) {
			clearInterval(tempo);
		} 
	},1000);
	setTimeout(function(){
		pararTiempo();
	},20000);
}

function pararTiempo(){
	girarTiempo = 0;
}