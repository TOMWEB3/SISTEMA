function ex1(){
    element = document.getElementById('ipt-ex1');
    raio = element.value;
    alert(calcula_area_circulo(raio));
}


function calcula_area_circulo(raio){
    var area = Math.PI * Math.pow(raio, 2);
	return area;
}
