jogadores = ['Julio Cesar', 'Daniel Alves', 'David Luiz', 'Thiago Silva', 'Luiz Gustavo', 'Paulinho', 'Fernandinho', 'Oscar', 'Neymar', 'Fred']

function ex3(){
    element = document.getElementById('ipt-ex3');
    nomes = element.value;
    alert(jogaram(nomes));	
}


function jogaram(nomes){
    lista = nomes.split(',');
	contador = 0;
	for(var i=0; i<lista.length; i++){		
		for(var j=0; j<jogadores.length; j++){
			if(lista[i].trim().toLowerCase()==jogadores[j].toLowerCase()){
				contador++;				
			}
		}
	}
	if(contador==0){
		console.log(contador);
		return  'Nenhum';
	}
	if(contador>0 && contador<lista.length){
		console.log(contador);
		return 'Apenas alguns.';
		
	}

	if(contador==lista.length){
		console.log(contador);
		return 'Isso mesmo!'
	}	
}
