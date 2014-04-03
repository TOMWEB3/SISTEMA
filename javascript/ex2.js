function ex2(){
    element = document.getElementById('ipt-ex2');
    limite = element.value;
    alert(retorna_pares(limite));
}


function retorna_pares(limite){
	var pares = [];
    var j = 0;

	for(var i = 1; i <= limite; i++){
		if((i % 2) == 0){
			pares[j] = i;
            j++;
		}
	}

	return pares.join();
}



function retorna_pares_dynargs(){
}
