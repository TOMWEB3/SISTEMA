usuarios = [{nome:'Romário', idade:42, gols:1002, assistencias:120}, {nome:'Dadá', idade:62, gols:600, assistencias:40},
			{nome:'Sávio', idade:39, gols:200, assistencias:300}, {nome:'Obina', idade:32, gols:150, assistencias:80}];

function ex9(){
    criterio = document.getElementById('ipt-ex9');
    alert(recuperar_por_criterio(criterio));
}


function recuperar_por_criterio(criterio){
    var gols;
    var assistencia;
    var novo;
    var velho;
    var contadorGols;
    var contadorAssis;
    var contadorNovo;
    var contadorVelho;

    for(var i = 0; i < usuarios; i++){
        if(i == 0){
            contadorGols = usuarios[i]['gols'];
            contadorAssis = usuarios[i]['assistencias'];
            contadorNovo = usuarios[i]['idade'];
            contadorVelho = contadorNovo;
        }

        if(usuarios[i]['gols'] > contadorGols){
            gols = 'Nome: ' + usuarios[i]['nome'] + '\n Gols: '+ usuarios[i]['gols'];
        }

        if(usuarios[i]['assistencias'] > contadorAssis){
            assistencia = 'Nome: ' + usuarios[i]['nome'] + '\n Assistências: '+ usuarios[i]['assistencia'];
        }

        if(usuarios[i]['idade'] < contadorNovo){
            novo = 'Nome: ' + usuarios[i]['nome'] + '\n Idade: '+ usuarios[i]['idade'];
        }

        if(usuarios[i]['idade'] > contadorVelho){
            velho = 'Nome: ' + usuarios[i]['nome'] + '\n Idade: '+ usuarios[i]['idade'];
        }
    }

	switch(criterio){
		case 'gols': return gols; break;
        case 'assistencias': return assistencia; break;
        case 'novo': return novo; break;
        case 'velho': return velho; break;
	}
}


